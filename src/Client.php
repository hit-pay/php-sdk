<?php

namespace HitPay;

/**
 * Class Client
 * @package HitPay
 */
class Client
{
    protected $apiKey = '';

    /**
     * Client constructor.
     * @param $apiKey
     */
    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

}
