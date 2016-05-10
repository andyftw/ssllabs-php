<?php

namespace Andyftw\SSLLabs;

use GuzzleHttp\Client;
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
final class Api
{
    const API_URL = 'https://api.ssllabs.com/api/v2';

    /**
     * @var \GuzzleHttp\Client
     */
    private $client;

    /**
     * @var \JMS\Serializer\SerializerBuilder
     */
    private $serializer;

    public function __construct()
    {
        $this->client = new Client();
        $this->serializer = SerializerBuilder::create()->build();
    }

    /**
     * API Call: info
     * Should be used to check the availability of the SSL Labs servers, retrieve the engine and criteria version
     * and initialize the maximum number of concurrent assessments.
     *
     * @see https://github.com/ssllabs/ssllabs-scan/blob/stable/ssllabs-api-docs.md#check-ssl-labs-availability
     *
     * @return \Andyftw\SSLLabs\Model\Info
     */
    public function info()
    {
        return $this->json('info', Model\Info::class);
    }

    /**
     * API Call: analyze.
     *
     * @see https://github.com/ssllabs/ssllabs-scan/blob/stable/ssllabs-api-docs.md#invoke-assessment-and-check-progress
     * 
     * @param string $host           Hostname
     * @param bool   $publish        Set to "on" if assessment results should be published on the public results boards; optional, defaults to "off".
     * @param bool   $startNew       If set to "on" then cached assessment results are ignored and a new assessment is started. 
     * @param bool   $fromCache      This parameter is intended for API consumers that don't want to wait for assessment results. 
     * @param int    $maxAge         Maximum report age, in hours, if retrieving from cache (fromCache parameter set).
     * @param string $all            By default this call results only summaries of individual endpoints. 
     * @param bool   $ignoreMismatch Set to "on" to proceed with assessments even when the server certificate doesn't match the assessment hostname. 
     *
     * @return Model\Host
     */
    public function analyze($host, $publish = false, $startNew = false, $fromCache = false, $maxAge = null, $all = null, $ignoreMismatch = false)
    {
        return $this->json(
            'analyze',
            Model\Host::class,
            [
                'host' => $host,
                'publish' => $publish ? 'on' : 'off',
                'startNew' => $startNew ? 'on' : 'off',
                'fromCache' => $fromCache ? 'on' : 'off',
                'maxAge' => $maxAge,
                'all' => $all,
                'ignoreMismatch' => $ignoreMismatch ? 'on' : 'off',
            ]
        );
    }

    /**
     * API Call: getEndpointData.
     *
     * @see https://github.com/ssllabs/ssllabs-scan/blob/stable/ssllabs-api-docs.md#retrieve-detailed-endpoint-information
     * 
     * @param string $host      Hostname
     * @param string $s         Endpoint IP address
     * @param string $fromCache This parameter is intended for API consumers that don't want to wait for assessment results. 
                                Can't be used at the same time as the startNew parameter.
     * @return Model\Endpoint
     */
    public function getEndpointData($host, $s, $fromCache = false)
    {
        return $this->json(
            'getEndpointData',
            Model\Endpoint::class,
            [
                'host' => $host,
                's' => $s,
                'fromCache' => $fromCache,
            ]
        );
    }

    /**
     * API Call: getStatusCodes.
     *
     * @see https://github.com/ssllabs/ssllabs-scan/blob/stable/ssllabs-api-docs.md#retrieve-known-status-codes
     *
     * @return Model\StatusCodes
     */
    public function getStatusCodes()
    {
        return $this->json('getStatusCodes');
    }

    /**
     * API Call: getRootCertsRaw
     * Returns the root certificates used for trust validation.
     *
     * @see https://github.com/ssllabs/ssllabs-scan/blob/stable/ssllabs-api-docs.md#retrieve-known-status-codes
     *
     * @return string
     */
    public function getRootCertsRaw()
    {
        return (string) $this->request('getRootCertsRaw')->getBody();
    }

    /**
     * Send request.
     * 
     * @param string $call
     * @param string $type
     * @param array  $parameters
     */
    private function request($call, $parameters = [])
    {
        return $this->client->request('GET', self::API_URL.'/'.$call, [
            'query' => $parameters
        ]);
    }
    
    /**
     * Get API response.
     * 
     * @param string $call
     * @param string $type
     * @param array  $parameters
     */
    private function json($call, $type, $parameters = [])
    {
        $response = $this->request($call, $parameters);
        $content = (string) $response->getBody();

        return $this->serializer->deserialize($content, $type, 'json');
    }
}
