<?php

namespace Vendcore\Catalog\Api\Sdk\Traits;

use Illuminate\Support\Str;

trait CamelSnakeHelpers
{

    /**
     * Convert array keys to camel case recursively.
     *
     * @param  array $array
     * @return string
     */
    public function camelKeys($array)
    {
        $result = [];
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $value = $this->camelKeys($value);
            }
            $result[Str::camel($key)] = $value;
        }
        return $result;
    }



    /**
     * Convert array keys to snake case recursively.
     *
     * @param  array  $array
     * @param  string $delimiter
     * @return string
     */
    public function snakeKeys($array)
    {
        $result = [];
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $value = $this->snakeKeys($value);
            }
            $result[Str::snake($key)] = $value;
        }
        return $result;
    }


}