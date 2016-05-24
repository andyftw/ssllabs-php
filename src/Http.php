<?php

namespace Andyftw\SSLLabs;

/**
 * SSLLabs-PHP.
 * 
 * This PHP library provides basic access to the SSL Labs API
 * and is build upon the official API documentation at
 * https://github.com/ssllabs/ssllabs-scan/blob/master/ssllabs-api-docs.md
 * 
 * @author Andy <https://github.com/andyftw>
 * @license MIT
 */
class Http
{
    /**
     * @var array
     */
    private static $retryCodes = array('408', '502', '503', '504');
    
    /**
     * @var array
     */
    private static $defaultConfig = array(
        'headers' => array(),
        'curl' => array(),
        'retries' => 3
    );
    
    /**
     * @var array
     */
    private $config;

    /**
     * Constructor
     *
     * @throws Exception\HttpException
     */
    public function __construct($config)
    {
        if (!function_exists("curl_init")) {
            throw new Exception\HttpException("Curl not found");
        }
        
        $this->config = array_merge(self::$defaultConfig, $config);
    }

    /**
     * Execute http request
     *
     * @throws Exception\HttpException
     */
    public function execute($url)
    {
        $ch = curl_init($url);
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLINFO_HEADER_OUT, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->config['headers']);
        
        curl_setopt_array($ch, $this->config['curl']);

        $result = curl_exec($ch);
        $httpStatus = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        $retries = 0;
        if (in_array($httpStatus, self::$retryCodes) && $this->retries !== null) {
            do {
                $result = curl_exec($ch);
                $httpStatus = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            } while (in_array($httpStatus, self::$retryCodes) && (++$retries < $this->retries));
        }

        if (curl_errno($ch)) {
            $error = curl_error($ch);
            curl_close($ch);
            throw new Exception\HttpException($error);
        }

        curl_close($ch);

        if (in_array($httpStatus, self::$retryCodes)) {
            throw new Exception\HttpException("Got Http response code $httpStatus when accessing {$url}. Retried $retries times.");
        } elseif ($httpStatus < 200 || $httpStatus >= 300) {
            throw new Exception\HttpException("Got Http response code $httpStatus when accessing {$url}.");
        }

        return $result;
    }
}
