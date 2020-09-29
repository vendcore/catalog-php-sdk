<?php

/**
 * @author Daniel Hofmann dan@vendcore.com, mail@danhofmann.com
 */

namespace Vendcore\Catalog\Api\Factory;

use Illuminate\Support\Str;
use Vendcore\Catalog\Api\BaseClient\BaseClient;
use Vendcore\Catalog\Api\Sdk\ApiError\ApiErrorResolver;

class Factory
{

    private $apiConfig;

    /**
     * @var string
     *
     *  The Vendcore API key for the Catalog API Account
     */
    protected $apiKey = '';

    /**
     * @var ApiErrorResolver
     */
    protected $apiErrorResolver;

    /**
     * @var bool
     *
     * Put the SDK into sandbox mode
     */
    protected $sandboxMode = false;

    /**
     * @var bool
     *
     * If you want to output additional debugging information, such as the HTTP Request, and the result array, for each API call
     */
    protected $debugMode = false;

    public function __construct($apiKey, ApiErrorResolver &$apiErrorResolver)
    {
        $this->apiConfig = include(dirname(__DIR__) . '/config/api.php');
        $this->apiKey = $apiKey;
        $this->apiErrorResolver = $apiErrorResolver;
    }


    public function __call($name, $arguments)
    {

        // generate the name of the class, based on the input
        $className = strtolower(str_replace('get', '', $name));

        // check and see if we have our object name, that we generated, in our config array
        if (array_key_exists($className, $this->apiConfig)) {
            // we found it, so dynamically generate a canonical object class
            return $this->generateClass($className);
        } else {
            throw new \Exception("Method Doesn't Exist");
        }
    }

    private function generateClass($name)
    {

        // generate our API object class
        $class = new class($this->apiKey, $this->apiConfig[$name], $name, $this->isSandboxMode()) {

            protected $config;
            protected $baseClient;
            protected $apiKey;
            protected $name;
            protected $data = []; // return data from the API call
            /**
             * @var ApiErrorResolver
             */
            protected $apiErrorResolver;

            protected $sandboxMode = false;
            protected $debugMode = false;


            private $parameters = [];
            private $tokens = [];
            private $success = false; // was the operation successful, or did it return errors
            private $exists = false; // if the API returned data or or not, usually called to see if an item exists, when calling a get method, such as $products->get(), or $products->getProducts()

            public function __construct($apiKey, $config, $name, $isSandboxMode)
            {
                $this->apiKey = $apiKey;
                $this->config = $config;
                $this->name = $name;
                $this->baseClient = new BaseClient($apiKey, $isSandboxMode ? BaseClient::ENV_STAGE : BaseClient::ENV_PROD, $this->isDebugMode());
            }

            public function __call($name, $arguments)
            {

                // if the method doesn't exist
                if (!method_exists($this, $name)) {

                    // allow for setters for our field parameters
                    if (strpos($name, 'set') !== false) {

                        // get the field, minus the word "set"
                        $fieldName = str_replace('set', '', $name);

                        // convert from camel case to snake case
                        $fieldNameSnake = Str::snake($fieldName);

                        // does it exist in our parameters field set
                        if (array_key_exists($fieldNameSnake, $this->config['params'])) {
                            // save the value in our parameters array
                            $this->parameters[$fieldNameSnake] = $arguments[0];
                            $this->tokens[] ='{' .$fieldNameSnake . '}';
                        } else {
                            throw new \Exception("Method Doesn't Exist for " . $name);
                        }

                        // allow for adders for our field parameters (append data to an array, before we send)
                    } elseif (strpos($name, 'add') !== false
                        && !isset($this->config['endpoints'][$name]) // must not be in the list of API verbs
                    ) {

                        // get the field, minus the word "set"
                        $fieldName = str_replace('add', '', $name);

                        // convert from camel case to snake case
                        $fieldNameSnake = Str::snake($fieldName);

                        // does it exist in our parameters field set, with a .* (indicat
                        if (array_key_exists($fieldNameSnake . '.*', $this->config['params'])) {
                            // add the value to our parameters array
                            $this->parameters[$fieldNameSnake][] = $arguments[0];
                        } else {
                            throw new \Exception("Method Doesn't Exist for " . $name);
                        }



                    // allow for getters for our return data
                    } elseif (strpos($name, 'get') !== false //&& strlen($name) !== 3  // must contain the word get, and not only be the word get, as "get" is an API verb
                        && !isset($this->config['endpoints'][$name]) // must not be in the list of API verbs
                    ) {

                        // get the field, minus the word "get"
                        $fieldName = str_replace('get', '', $name);

                        // convert from camel case to snake case
                        $fieldNameSnake = Str::snake($fieldName);

                        // does it exist in our parameters field set
                        if (isset($this->data->{$fieldNameSnake})) {
                            // return the value
                            return $this->data->{$fieldNameSnake};
                        } else {
                            throw new \Exception("Field Name Doesn't Exist for " . $fieldNameSnake);
                        }

                    } else {

                        // are we calling a method for calling the REST API, to perform a CRUD operation
                        if (array_key_exists($name, $this->config['endpoints'])) {
                            $endpoint = $this->config['endpoints'][$name];
                            // create route, which is the route name (e.g. brand, product, image) + the endpoint for the specific operation

                            if (empty($endpoint['route'])) {/*h*/
                                $route = $this->name;
                            } else {
                                // Vitaly modified his route to now include the full name
                               /* if (strpos( $endpoint['route'], "/") !== false) {
                                    $route = $endpoint['route'];
                                } else {
                                    $route = 'catalog/api/v1/' . $this->name . '/' . $endpoint['route'];
                                }*/
                                //$route = $this->name . '/' . $endpoint['route'];
                                $route = $endpoint['route'];

                                if ($route == 'catalog/api/v1/attribute/attach/product-variation') {
                                    //print_pre($this->tokens); die();
                                    //print_pre($this->parameters);
                                }

                                // replace any tokens in the route with the variable, if we have tokens in our route tokens in the route string being with { and end with }, so we just need to check if a begin token character exists in the route
                                if (!empty($this->tokens) && strpos($route, '{') !== false) {
                                    $route = str_replace($this->tokens, $this->parameters, $route);
                                }

                            }

                            // reset our flags and variables
                            $this->exists = false;
                            $this->success = false;
                            $this->data = [];

                            // if there are multiple methods allowed, just grab the first method
                            $method = $endpoint['methods'][0];
                            // do the API call
                            if ($this->isDebugMode()) echo "Making API Call: $route with " . json_encode($this->parameters) . "\n";
                            $result = $this->baseClient->call($route, $method, $this->parameters);

                            if ($this->isDebugMode()) echo "Result: " . print_r($result, true) . "\n";

                            if ($result['status'] == 1) {    // on a successful API call
                                $this->success = true;
                                $this->data = $result['data'];
                                if (!empty($this->data)) $this->exists = true;

                            } else {  // if there were failures (failed API call)
                                if (isset($result['errors'])) {
                                    $this->apiErrorResolver->resolve($result['errors'], $name);
                                }
                            }

                            return $result;
                        } else {
                            throw new \Exception("Method Doesn't Exist for " . $name . '()');
                        }
                    }


                } else {
                    // call the method
                    $this->$name($arguments);
                }
            }

            /**
             * @return bool
             */
            public function isSuccess(): bool
            {
                return $this->success;
            }

            /**
             * @return bool
             */
            public function exists(): bool
            {
                return $this->exists;
            }

            /**
             * @param bool $sandboxMode
             */
            public function setSandboxMode(bool $sandboxMode): void
            {
                $this->sandboxMode = $sandboxMode;
            }

            /**
             * @param ApiErrorResolver $apiErrorResolver
             */
            public function setApiErrorResolver(ApiErrorResolver $apiErrorResolver): void
            {
                $this->apiErrorResolver = $apiErrorResolver;
            }



            /**
             * @return bool
             */
            public function isSandboxMode(): bool
            {
                return $this->sandboxMode;
            }

            /**
             * @return bool
             */
            public function isDebugMode(): bool
            {
                return $this->debugMode;
            }



            /**
             * @param bool $debugMode
             */
            public function setDebugMode(bool $debugMode): void
            {
                $this->debugMode = $debugMode;
            }


        }; // end setting of anonymous class

        // pass to our class, whether or not it should throw exceptions
        $class->setApiErrorResolver($this->getApiErrorResolver());
        // pass to our class, whether or not it should be in sandbox mode
        $class->setSandboxMode($this->isSandboxMode());
        // pass to our class, whether or not it should be in sandbox mode
        $class->setDebugMode($this->isDebugMode());

        return $class;

    }

    /**
     * @return ApiErrorResolver
     */
    public function getApiErrorResolver(): ApiErrorResolver
    {
        return $this->apiErrorResolver;
    }

    /**
     * @param ApiErrorResolver $apiErrorResolver
     */
    public function setApiErrorResolver(ApiErrorResolver $apiErrorResolver): void
    {
        $this->apiErrorResolver = $apiErrorResolver;
    }

    /**
     * @return bool
     */
    public function isSandboxMode(): bool
    {
        return $this->sandboxMode;
    }

    /**
     * @param bool $sandboxMode
     */
    public function setSandboxMode(bool $sandboxMode): void
    {
        $this->sandboxMode = $sandboxMode;
    }

    /**
     * @return bool
     */
    public function isDebugMode(): bool
    {
        return $this->debugMode;
    }

    /**
     * @param bool $debugMode
     */
    public function setDebugMode(bool $debugMode): void
    {
        $this->debugMode = $debugMode;
    }


}