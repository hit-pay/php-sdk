<?php

namespace HitPay;

/**
 * Class Request
 * @package HitPay
 */
class Request
{
    const API_ENDPOINT = '';

    const TYPE_CONTENT = '';

    protected $privateApiKey = '';

    private $ch;

    public function __construct($privateApiKey)
    {
        if (!extension_loaded('curl')) {
            throw new \Exception('For work with Klaviyo Api to need php curl extension');
        }

        $this->privateApiKey = $privateApiKey;
        $this->ch = curl_init();
    }

    /**
     * @param $path
     * @param array $request
     * @return mixed|null
     * @throws \Exception
     */
    protected function post($path, $request = [])
    {
        $request = json_encode($request);

        curl_setopt($this->ch, CURLOPT_URL, static::API_ENDPOINT . $path);
        curl_setopt($this->ch, CURLOPT_HEADER, false);
        curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($this->ch, CURLOPT_POSTFIELDS, $request);
        curl_setopt($this->ch, CURLOPT_HTTPHEADER, $this->getHeaders());

        $result = curl_exec($this->ch);
        $result = !empty($result) ? json_decode($result) : null;

        $this->checkError($result);

        return $result;
    }

    /**
     * @param $path
     * @param array $request
     * @return mixed|null
     * @throws \Exception
     */
    protected function get($path, $request = [])
    {
        $request = json_encode($request);

        curl_setopt($this->ch, CURLOPT_URL, static::API_ENDPOINT . $path);
        curl_setopt($this->ch, CURLOPT_HEADER, false);
        curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($this->ch, CURLOPT_POSTFIELDS, $request);
        curl_setopt($this->ch, CURLOPT_HTTPHEADER, $this->getHeaders());

        $result = curl_exec($this->ch);
        $result = !empty($result) ? json_decode($result) : null;

        $this->checkError($result);

        return $result;
    }

    /**
     * @param $path
     * @param array $request
     * @return bool
     * @throws \Exception
     */
    protected function put($path, $request = [])
    {
        $request = json_encode($request);

        curl_setopt($this->ch, CURLOPT_URL, static::API_ENDPOINT . $path);
        curl_setopt($this->ch, CURLOPT_HEADER, true);
        curl_setopt($this->ch, CURLOPT_NOBODY, false);
        curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->ch, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($this->ch, CURLOPT_POSTFIELDS, $request);
        curl_setopt($this->ch, CURLOPT_HTTPHEADER, $this->getHeaders());

        curl_exec($this->ch);
        $this->checkError(null);
        $httpCode = curl_getinfo($this->ch, CURLINFO_HTTP_CODE);

        if ($httpCode == 200) {
            return true;
        }
    }

    /**
     * @param $type PUT, DELETE, GET, POST
     * @param $path
     * @param array $request
     * @return bool
     * @throws \Exception
     */
    protected function request($type, $path, $request = [])
    {
        $request = json_encode($request);

        curl_setopt($this->ch, CURLOPT_URL, static::API_ENDPOINT . $path);
        curl_setopt($this->ch, CURLOPT_HEADER, true);
        curl_setopt($this->ch, CURLOPT_NOBODY, false);
        curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->ch, CURLOPT_CUSTOMREQUEST, $type);
        curl_setopt($this->ch, CURLOPT_POSTFIELDS, $request);
        curl_setopt($this->ch, CURLOPT_HTTPHEADER, $this->getHeaders());

        $result = curl_exec($this->ch);
        $result = !empty($result) ? json_decode($result) : null;

        $this->checkError($result);

        return $result;
    }

    /**
     * @param $path
     * @return bool
     * @throws \Exception
     */
    protected function delete($path, $request = [])
    {
        $request = json_encode($request);

        curl_setopt($this->ch, CURLOPT_URL, static::API_ENDPOINT . $path);
        curl_setopt($this->ch, CURLOPT_HEADER, true);
        curl_setopt($this->ch, CURLOPT_NOBODY, false);
        curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
        curl_setopt($this->ch, CURLOPT_POSTFIELDS, $request);
        curl_setopt($this->ch, CURLOPT_HTTPHEADER, $this->getHeaders());

        curl_exec($this->ch);
        $this->checkError(null);
        $httpCode = curl_getinfo($this->ch, CURLINFO_HTTP_CODE);

        if ($httpCode == 200) {
            return true;
        }
    }

    /**
     * @param null $response
     * @return bool
     * @throws \Exception
     */
    protected function checkError($response = null)
    {
        $error = curl_error($this->ch);

        if (!empty($error)) {
            throw new \Exception($error);
        } elseif (isset($response->detail)) {
            throw new \Exception($response->detail);
        }
    }

    /**
     * @return array - headers for connect to Klaviyo Api
     */
    protected function getHeaders()
    {
        return [
            'Content-Type: ' . static::TYPE_CONTENT,
            'api-key: ' . $this->privateApiKey
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