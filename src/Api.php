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
final class Api
{
    /**
     * @var \Andyftw\SSLLabs\Request
     */
    private $request;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->request = new Request();
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
        return $this->request->json('info', 'Andyftw\SSLLabs\Model\Info');
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
        return $this->request->json(
            'analyze',
            'Andyftw\SSLLabs\Model\Host',
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
     * @return \Andyftw\SSLLabs\Model\Endpoint
     */
    public function getEndpointData($host, $s, $fromCache = false)
    {
        return $this->request->json(
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
        return $this->request->json('getStatusCodes', 'Andyftw\SSLLabs\Model\StatusCodes');
    }

    /**
     * API Call: getRootCertsRaw
     * Returns the root certificates used for trust validation.
     *
     * @see https://github.com/ssllabs/ssllabs-scan/blob/stable/ssllabs-api-docs.md#retrieve-root-certificates
     *
     * @return string
     */
    public function getRootCertsRaw()
    {
        return (string) $this->request->plain('getRootCertsRaw');
    }
}
