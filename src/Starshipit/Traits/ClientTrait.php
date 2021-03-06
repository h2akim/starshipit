<?php

namespace Starshipit\Traits;

use GuzzleHttp\Client;

/**
 * Class ClientTrait
 * @package Starshipit\Traits
 */
trait ClientTrait
{
    /**
     * @var
     */
    private $client;

    /**
     * @return Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param Client $client
     */
    public function setClient(Client $client)
    {
        $this->client = $client;
    }
}

