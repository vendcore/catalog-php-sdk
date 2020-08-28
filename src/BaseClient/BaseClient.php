<?php

/**
 * @author Daniel Hofmann dan@vendcore.com, mail@danhofmann.com
 */


namespace Vendcore\Catalog\Api\BaseClient;

use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Psr7;
use Vendcore\Catalog\Api\BaseClient\Client\GuzzleClient;

class BaseClient extends GuzzleClient
{

    const ENV_PROD = 'prod';
    const ENV_STAGE = 'stage';
    const ENV_MOCK = 'mock';

    const BASE_URL_PROD = 'https://api.vendcore.com/';
    const BASE_URL_STAGE = 'https://dev.api.vendcore.com/';

    private $baseUri;
    private $apiKey;
    private $contentType;

    protected $error = false;
    protected $errorRequest;
    protected $errorResponse;
    protected $errorCode;
    protected $errorMessage;

    /**
     * @param array $config
     * @param string $env
     * @throws \Exception
     */
    public function __construct($apiKey, $env = self::ENV_PROD)
    {

        /*
         * Make sure ENV is valid
         */
        if (!in_array($env, [self::ENV_PROD, self::ENV_STAGE, self::ENV_MOCK])) {
            throw new \Exception('Invalid environment', 1462566788);
        }


        // Set ENV
        $this->env = $env;

        $clientConfig = [
            // Base URI is used with relative requests
            'base_uri' => $this->getEnvBaseUrl($env),
        ];

        if (self::ENV_STAGE == $env) {
            // disable SSL verification on staging
            $clientConfig['verify'] = false;
        }

        $this->baseUri = $this->getEnvBaseUrl($env);

        // Create the client.
        parent::__construct(
            $clientConfig
        );

        $this->apiKey = $apiKey;

    }

    public function call($endPoint, $method, $params = null, $fileAttachment = null)
    {
        $this->error = false;

        $options = [
            'headers' => [
               'Content-Type' => (!is_null($this->getContentType())) ? $this->getContentType() : 'application/json',
                'Accept' => 'application/json',
            ],
            'http_errors' => true,
            'debug' => true,
        ];
        $options['headers'] = array_merge($options['headers'], $this->getAuthorizationHeader($method, $endPoint, $params));


        if (!is_null($fileAttachment)) {
            $this->addMultiPart($options, $fileAttachment);
        }

        if ($method == 'GET' && !is_null($params)) {
            if (is_array($params)) {
                $this->addQueryStrinngParams($options, $params);
            }

        }

        if ($method == 'POST' && !is_null($params)) {
            // if we have a form post of key values, then create that
            if (is_array($params)) {
                unset($options['headers']['Content-Type']); // cannot set Content Type to 'application/json' when using form_params, as per Guzzle docs (http://docs.guzzlephp.org/en/stable/request-options.html#form-params This option cannot be used with body, multipart, or json)
                $this->addFormParams($options, $params);
                // if not, we are posting raw data (XML/JSON)
            } else {
                $options['body'] = $params;
            }
        }

        $response = null;

        try {

            $response = $this->client->request($method, $endPoint, $options);

        } catch (ServerException | ClientException $e) {

            $this->error = true;
            $this->errorRequest = Psr7\str($e->getRequest());
            $this->errorResponse = Psr7\str($e->getResponse());
            $this->errorCode = $e->getCode();
            $this->errorMessage = $e->getMessage();

            throw new \Exception($this->errorMessage);
            //print_r($this->errorMessage); die();
            $body = $e->getResponse()->getBody();
            $parameters = (array)json_decode((string)$body);

            return $parameters;
            //echo Psr7\str($e->getRequest());
            //echo Psr7\str($e->getResponse());
            //die();
        } catch (\Exception $e) {
            $this->error = true;
            $this->errorMessage = $e->getMessage();
            throw new \Exception($e->getMessage());
            //echo $e->getMessage();
            //die('adas');
        }
        //echo Psr7\str($e->getRequest());
        //print_pre($response); die();
        $body = $response->getBody();
        $parameters = (array)json_decode((string)$body);
        return $parameters;

    }

    private function addFormParams(&$options, $formParams)
    {
        foreach ($formParams as $key => $value) {
            $options['form_params'][$key] = $value;
        }
    }

    private function addQueryStrinngParams(&$options, $params)
    {
        foreach ($params as $key => $value) {
            $options['query'][$key] = $value;
        }
    }

    private function addMultiPart(&$options, $fileAttachment)
    {
        $options['multipart'] = [
            [
                'name' => 'file_contents',
                'contents' => $fileAttachment
            ]
        ];
        $options['headers']['Content-Type'] = 'multipart/form-data';
    }



    private function getAuthorizationHeader($method = null, $endPoint = null, $params = null)
    {
        return [
            'Authorization' => 'Bearer ' . $this->apiKey,
        ];
    }

    /**
     * Get baseUrl for given environment
     * @param string $env
     * @return null|string
     */
    private function getEnvBaseUrl($env)
    {
        $suffix = '';

        switch ($env) {
            case self::ENV_PROD:
                return self::BASE_URL_PROD . $suffix;
            case self::ENV_STAGE:
                return self::BASE_URL_STAGE. $suffix;
            case self::ENV_MOCK:
                return null;
        }
    }

    /**
     * @return mixed
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * @param mixed $contentType
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
    }

    /**
     * @return bool
     */
    public function isError()
    {
        return $this->error;
    }

    /**
     * @param bool $error
     */
    public function setError($error)
    {
        $this->error = $error;
    }

    /**
     * @return mixed
     */
    public function getErrorRequest()
    {
        return $this->errorRequest;
    }

    /**
     * @param mixed $errorRequest
     */
    public function setErrorRequest($errorRequest)
    {
        $this->errorRequest = $errorRequest;
    }

    /**
     * @return mixed
     */
    public function getErrorResponse()
    {
        return $this->errorResponse;
    }

    /**
     * @param mixed $errorResponse
     */
    public function setErrorResponse($errorResponse)
    {
        $this->errorResponse = $errorResponse;
    }

    /**
     * @return mixed
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * @param mixed $errorCode
     */
    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;
    }

    /**
     * @return mixed
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * @param mixed $errorMessage
     */
    public function setErrorMessage($errorMessage)
    {
        $this->errorMessage = $errorMessage;
    }

}