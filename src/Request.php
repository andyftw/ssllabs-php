<?php

namespace Andyftw\SSLLabs;

use JMS\Serializer\SerializerBuilder;

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
final class Request
{
    const API_URL = 'https://api.ssllabs.com/api/v2';

    /**
     * @var \Andyftw\SSLLabs\Http
     */
    private $http;

    /**
     * @var \JMS\Serializer\SerializerBuilder
     */
    private $serializer;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->serializer = SerializerBuilder::create()->build();
        $this->http = new Http(array(
            'headers' => array('user-agent' => 'SSLLabs-PHP')
        ));
    }

    /**
     * Get PLAIN response.
     * 
     * @param string $call
     * @param array  $parameters
     */
    public function plain($call, $parameters = [])
    {
        try {
            $query = http_build_query(array_filter($parameters), '', '&');
            $url = sprintf('%s/%s?%s', self::API_URL, $call, $query);

            return $this->http->execute($url);
        } catch (\Exception $e) {
            throw new Exception\ApiException($e->getMessage(), $url);
        }
    }
    
    /**
     * Get API response.
     * 
     * @param string $call
     * @param string $type
     * @param array  $parameters
     */
    public function json($call, $type, $parameters = [])
    {
        try {
            $content = $this->plain($call, $parameters);

            return $this->serializer->deserialize($content, $type, 'json');
        } catch (\Exception $e) {
            throw new Exception\ApiException($e->getMessage(), $call);
        }
    }
}
