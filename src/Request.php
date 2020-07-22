<?php

namespace HitPay;

/**
 * Class Request
 * @package HitPay
 */
class Request
{
    const API_ENDPOINT = '';

    const SANDBOX_API_ENDPOINT = '';

    const TYPE_CONTENT = '';

    /**
     * @var string
     */
    protected $privateApiKey = '';

    /**
     * @var bool
     */
    protected $isLive = false;

    private $ch;

    /**
     * List of errors - https://staging.hit-pay.com/docs.html?shell#errors
     *
     * @var string[]
     */
    protected $errors = array(
        400 => 'Bad Request -- Your request is invalid.',
        401 => 'Unauthorized -- Your API key is wrong.',
        404 => 'Not Found -- The payment request could not be found.',
        500 => 'Internal Server Error -- We had a problem with our server. Try again later.',
    );

    /**
     * Request constructor.
     * @param $privateApiKey
     * @param bool $live
     * @throws \Exception
     */
    public function __construct($privateApiKey, $live = false)
    {
        if (!extension_loaded('curl')) {
            throw new \Exception('For work with HitPay Api to need php curl extension');
        }

        $this->privateApiKey = $privateApiKey;
        $this->isLive = $live;
        $this->ch = curl_init();
    }

    /**
     * @param $type PUT, DELETE, GET, POST
     * @param $path
     * @param array $request
     * @return bool
     * @throws \Exception
     */
    protected function request($type, $path, $request = array())
    {
        $endpoint = $this->isLive ? static::API_ENDPOINT : static::SANDBOX_API_ENDPOINT;

        curl_setopt($this->ch, CURLOPT_URL, $endpoint . $path);
        curl_setopt($this->ch, CURLOPT_HEADER, false);
        curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->ch, CURLOPT_CUSTOMREQUEST, $type);

        if (!empty($request)) {
            $request = http_build_query($request);
            curl_setopt($this->ch, CURLOPT_POSTFIELDS, $request);
        }

        curl_setopt($this->ch, CURLOPT_HTTPHEADER, $this->getHeaders());

        $result = curl_exec($this->ch);
        $result = !empty($result) ? json_decode($result) : null;

        $this->checkError($result);

        return $result;
    }

    /**
     * @param null $response
     * @return void
     * @throws \Exception
     */
    protected function checkError($response = null)
    {
        $error = curl_error($this->ch);
        $httpCode = curl_getinfo($this->ch, CURLINFO_HTTP_CODE);

        if (!empty($error)) {
            throw new \Exception($error);
        } elseif (isset($response->detail)) {
            throw new \Exception($response->detail);
        } elseif ($httpCode != 200 && $httpCode != 201) {
            $message = isset($this->errors[$httpCode])
                ? $this->errors[$httpCode]
                : 'Error message does not exists.';
            throw new \Exception($message, $httpCode);
        }
    }

    /**
     * @return string[]
     */
    protected function getHeaders()
    {
        return [
            'Content-Type: ' . static::TYPE_CONTENT,
            'X-BUSINESS-API-KEY: ' . $this->privateApiKey
        ];
    }

    /**
     *
     */
    public function __destruct()
    {
        curl_close($this->ch);
    }
}