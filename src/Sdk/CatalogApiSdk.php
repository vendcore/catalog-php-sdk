<?php

/**
 * @author Daniel Hofmann dan@vendcore.com, mail@danhofmann.com
 */

namespace Vendcore\Catalog\Api\Sdk;

use Vendcore\Catalog\Api\Factory\Factory;
use Vendcore\Catalog\Api\Sdk\ApiError\ApiErrorResolver;

class CatalogApiSdk
{

    /**
     * @var Factory
     *
     * The factory object, for which you can request new API objects to be created
     */
    protected $factory;

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

    public function __construct($apiKey)
    {
        $this->apiErrorResolver = new ApiErrorResolver();
        $this->factory = new Factory($apiKey, $this->apiErrorResolver);
    }

    /**
     * @return Factory
     */
    public function getFactory(): Factory
    {
        return $this->factory;
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
        $this->factory->setSandboxMode($sandboxMode);
    }

    /**
     * @param bool $debugMode
     */
    public function setDebugMode(bool $debugMode): void
    {
        $this->factory->setDebugMode($debugMode);
    }

    /**
     * @return ApiErrorResolver
     */
    public function &getApiErrorResolver(): ApiErrorResolver
    {
        return $this->apiErrorResolver;
    }

}