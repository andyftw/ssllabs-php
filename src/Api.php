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
        return $this->request('info', 'Andyftw\SSLLabs\Model\Info');
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
     * @return \Andyftw\SSLLabs\Model\Host
     */
    public function analyze($host, $publish = false, $startNew = false, $fromCache = false, $maxAge = null, $all = null, $ignoreMismatch = false)
    {
        return $this->request(
            'analyze',
            'Andyftw\SSLLabs\Model\Host',
            [
                'host' => $host,
                'publish' => $publish,
                'startNew' => $startNew,
                'fromCache' => $fromCache,
                'maxAge' => $maxAge,
                'all' => $all,
                'ignoreMismatch' => $ignoreMismatch,
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
     * @return \Andyftw\SSLLabs\Model\Endpoint
     */
    public function getEndpointData($host, $s, $fromCache = false)
    {
        return $this->request(
            'getEndpointData',
            'Andyftw\SSLLabs\Model\Endpoint',
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
     * @return \Andyftw\SSLLabs\Model\StatusCodes
     */
    public function getStatusCodes()
    {
        return $this->request('getStatusCodes');
    }

    /**
     * API Call: getRootCertsRaw
     * Returns the root certificates used for trust validation.
     *
     * @see https://github.com/ssllabs/ssllabs-scan/blob/stable/ssllabs-api-docs.md#retrieve-known-status-codes
     */
    public function getRootCertsRaw()
    {
        return $this->request('getRootCertsRaw');
    }

    /**
     * Send API request.
     * 
     * @param string $call
     * @param string $type
     * @param array  $parameters
     *
     * @return $type
     */
    private function request($call, $type, $parameters = [])
    {
        $response = $this->client->request('GET', self::API_URL.'/'.$call, [
            'query' => $parameters,
        ]);

        return $this->serializer->deserialize((string) $response->getBody(), $type, 'json');
    }
}
