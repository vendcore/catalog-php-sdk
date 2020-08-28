<?php
/**
 * @author Daniel Hofmann dan@vendcore.com, mail@danhofmann.com
 */

namespace Vendcore\Catalog\Api\Sdk\ApiError;

class ApiErrorResolver
{

    /**
     * @var bool
     *
     * If we are calling a lookup method, such as get for getFoo(), to request data, toggle throwing an error
     */
    protected $throwErrorOnLookupsWhenFieldNotExist = false;

    /**
     * @var bool
     *
     * Whether the SDK will throw a PHP Exception, when an API call returns an error
     */
    protected $throwApiErrorExceptions = false;

    /**
     * @param array $errors
     * @param string $name
     * @throws \Exception
     *
     * Determine if any errors are throwable errors
     */
    public function resolve(array $errors, string $name)
    {

        $this->reduce($errors, $name);

        if ($this->isThrowApiErrorExceptions() && !empty($errors)) {
            throw new \Exception(print_r($errors, true));
        }

    }

    /**
     * @param array $errors
     * @param string $name
     *
     * reduce the error array by removing any errors, that are not throwable errors, based on the current config
     */
    private function reduce(array &$errors, string $name)
    {
        foreach ($errors as $idx => $error) {
            // unset any lookup errors when a field must exist on lookup request e.g. get()/getProducts()
            if (!$this->isThrowErrorOnLookupsWhenFieldNotExist()) {
                // do we have a get method
                if (strpos($name, 'get') !== false) {
                    // is an error being returned, because the field didn't exist (is invalid)
                    if (strpos($error, 'is invalid.') !== false) {
                        unset($errors[$idx]); // unset this error
                    }
                }
            }
        }
    }

    /**
     * @return bool
     */
    public function isThrowErrorOnLookupsWhenFieldNotExist(): bool
    {
        return $this->throwErrorOnLookupsWhenFieldNotExist;
    }

    /**
     * @param bool $throwErrorOnLookupsWhenFieldNotExist
     */
    public function setThrowErrorOnLookupsWhenFieldNotExist(bool $throwErrorOnLookupsWhenFieldNotExist): void
    {
        $this->throwErrorOnLookupsWhenFieldNotExist = $throwErrorOnLookupsWhenFieldNotExist;
    }

    /**
     * @return bool
     */
    public function isThrowApiErrorExceptions(): bool
    {
        return $this->throwApiErrorExceptions;
    }

    /**
     * @param bool $throwApiErrorExceptions
     */
    public function setThrowApiErrorExceptions(bool $throwApiErrorExceptions): void
    {
        $this->throwApiErrorExceptions = $throwApiErrorExceptions;
    }
}