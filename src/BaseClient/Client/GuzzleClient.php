<?php

/**
 * @author Daniel Hofmann dan@vendcore.com, mail@danhofmann.com
 */

namespace  Vendcore\Catalog\Api\BaseClient\Client;

use GuzzleHttp\Client;

class GuzzleClient
{
    protected $client;

    public function __construct($config)
    {
        $this->client = new Client($config);
    }

}