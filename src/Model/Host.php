<?php

/**
 * This file is part of SSLLabs-PHP.
 *
 * (c) Andy <info@andyfront.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Andyftw\SSLLabs\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Host.
 *
 *
 * @Serializer\AccessType("public_method")
 */
class Host
{
    /**
     * Assessment host, which can be a hostname or an IP address.
     *
     * @var string
     * @Serializer\Accessor(getter="getHost", setter="setHost")
     * @Serializer\SerializedName("host")
     * @Serializer\Type("string")
     */
    private $host;

    /**
     * Assessment port (e.g., 443).
     *
     * @var int
     * @Serializer\Accessor(getter="getPort", setter="setPort")
     * @Serializer\SerializedName("port")
     * @Serializer\Type("integer")
     */
    private $port;

    /**
     * Protocol (e.g., HTTP).
     *
     * @var string
     * @Serializer\Accessor(getter="getProtocol", setter="setProtocol")
     * @Serializer\SerializedName("protocol")
     * @Serializer\Type("string")
     */
    private $protocol;

    /**
     * True if this assessment is publicly available (listed on the SSL Labs assessment boards).
     *
     * @var bool
     * @Serializer\Accessor(getter="getIsPublic", setter="setIsPublic")
     * @Serializer\SerializedName("isPublic")
     * @Serializer\Type("boolean")
     */
    private $isPublic;

    /**
     * Assessment status; possible values: DNS, ERROR, IN_PROGRESS, and READY.
     *
     * @var string
     * @Serializer\Accessor(getter="getStatus", setter="setStatus")
     * @Serializer\SerializedName("status")
     * @Serializer\Type("string")
     */
    private $status;

    /**
     * Status message in English. When status is ERROR, this field will contain an error message.
     *
     * @var string
     * @Serializer\Accessor(getter="getStatusMessage", setter="setStatusMessage")
     * @Serializer\SerializedName("statusMessage")
     * @Serializer\Type("string")
     */
    private $statusMessage;

    /**
     * Assessment starting time, in milliseconds since 1970.
     *
     * @var int
     * @Serializer\Accessor(getter="getStartTime", setter="setStartTime")
     * @Serializer\SerializedName("startTime")
     * @Serializer\Type("integer")
     */
    private $startTime;

    /**
     * Assessment completion time, in milliseconds since 1970.
     *
     * @var int
     * @Serializer\Accessor(getter="getTestTime", setter="setTestTime")
     * @Serializer\SerializedName("testTime")
     * @Serializer\Type("integer")
     */
    private $testTime;

    /**
     * Assessment engine version (e.g., "1.0.120").
     *
     * @var string
     * @Serializer\Accessor(getter="getEngineVersion", setter="setEngineVersion")
     * @Serializer\SerializedName("engineVersion")
     * @Serializer\Type("string")
     */
    private $engineVersion;

    /**
     * Grading criteria version (e.g., "2009").
     *
     * @var string
     * @Serializer\Accessor(getter="getCriteriaVersion", setter="setCriteriaVersion")
     * @Serializer\SerializedName("criteriaVersion")
     * @Serializer\Type("string")
     */
    private $criteriaVersion;

    /**
     * When will the assessment results expire from the cache (typically set only for assessment with errors;
     * otherwise the results stay in the cache for as long as there's sufficient room).
     *
     * @var int
     * @Serializer\Accessor(getter="getCacheExpiryTime", setter="setCacheExpiryTime")
     * @Serializer\SerializedName("cacheExpiryTime")
     * @Serializer\Type("integer")
     */
    private $cacheExpiryTime;

    /**
     * List of [Endpoint objects](#endpoint).
     *
     * @var Andyftw\SSLLabs\Model\Endpoint[]
     * @Serializer\Accessor(getter="getEndpoints", setter="setEndpoints")
     * @Serializer\SerializedName("endpoints")
     * @Serializer\Type("array<Andyftw\SSLLabs\Model\Endpoint>")
     */
    private $endpoints;

    /**
     * The list of certificate hostnames collected from the certificates seen during assessment. The hostnames may
     * not be valid. This field is available only if the server certificate doesn't match the requested hostname. In
     * that case, this field saves you some time as you don't have to inspect the certificates yourself to find out
     * what valid hostnames might be.
     *
     * @var string[]
     * @Serializer\Accessor(getter="getCertHostnames", setter="setCertHostnames")
     * @Serializer\SerializedName("certHostnames")
     * @Serializer\Type("array<string>")
     */
    private $certHostnames;

    /**
     * Constructor.
     */
    public function __construct()
    {
    }

    /**
     * Assessment host, which can be a hostname or an IP address.
     *
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @param $host
     *
     * @return $this
     */
    public function setHost($host)
    {
        $this->host = $host;

        return $this;
    }

    /**
     * Assessment port (e.g., 443).
     *
     * @return int
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * @param $port
     *
     * @return $this
     */
    public function setPort($port)
    {
        $this->port = $port;

        return $this;
    }

    /**
     * Protocol (e.g., HTTP).
     *
     * @return string
     */
    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * @param $protocol
     *
     * @return $this
     */
    public function setProtocol($protocol)
    {
        $this->protocol = $protocol;

        return $this;
    }

    /**
     * True if this assessment is publicly available (listed on the SSL Labs assessment boards).
     *
     * @return bool
     */
    public function getIsPublic()
    {
        return $this->isPublic;
    }

    /**
     * @param $isPublic
     *
     * @return $this
     */
    public function setIsPublic($isPublic)
    {
        $this->isPublic = $isPublic;

        return $this;
    }

    /**
     * Assessment status; possible values: DNS, ERROR, IN_PROGRESS, and READY.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Status message in English. When status is ERROR, this field will contain an error message.
     *
     * @return string
     */
    public function getStatusMessage()
    {
        return $this->statusMessage;
    }

    /**
     * @param $statusMessage
     *
     * @return $this
     */
    public function setStatusMessage($statusMessage)
    {
        $this->statusMessage = $statusMessage;

        return $this;
    }

    /**
     * Assessment starting time, in milliseconds since 1970.
     *
     * @return int
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param $startTime
     *
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * Assessment completion time, in milliseconds since 1970.
     *
     * @return int
     */
    public function getTestTime()
    {
        return $this->testTime;
    }

    /**
     * @param $testTime
     *
     * @return $this
     */
    public function setTestTime($testTime)
    {
        $this->testTime = $testTime;

        return $this;
    }

    /**
     * Assessment engine version (e.g., "1.0.120").
     *
     * @return string
     */
    public function getEngineVersion()
    {
        return $this->engineVersion;
    }

    /**
     * @param $engineVersion
     *
     * @return $this
     */
    public function setEngineVersion($engineVersion)
    {
        $this->engineVersion = $engineVersion;

        return $this;
    }

    /**
     * Grading criteria version (e.g., "2009").
     *
     * @return string
     */
    public function getCriteriaVersion()
    {
        return $this->criteriaVersion;
    }

    /**
     * @param $criteriaVersion
     *
     * @return $this
     */
    public function setCriteriaVersion($criteriaVersion)
    {
        $this->criteriaVersion = $criteriaVersion;

        return $this;
    }

    /**
     * When will the assessment results expire from the cache (typically set only for assessment with errors;
     * otherwise the results stay in the cache for as long as there's sufficient room).
     *
     * @return int
     */
    public function getCacheExpiryTime()
    {
        return $this->cacheExpiryTime;
    }

    /**
     * @param $cacheExpiryTime
     *
     * @return $this
     */
    public function setCacheExpiryTime($cacheExpiryTime)
    {
        $this->cacheExpiryTime = $cacheExpiryTime;

        return $this;
    }

    /**
     * List of [Endpoint objects](#endpoint).
     *
     * @return Andyftw\SSLLabs\Model\Endpoint[]
     */
    public function getEndpoints()
    {
        return $this->endpoints;
    }

    /**
     * @param $endpoints
     *
     * @return $this
     */
    public function setEndpoints($endpoints)
    {
        $this->endpoints = $endpoints;

        return $this;
    }

    /**
     * The list of certificate hostnames collected from the certificates seen during assessment. The hostnames may
     * not be valid. This field is available only if the server certificate doesn't match the requested hostname. In
     * that case, this field saves you some time as you don't have to inspect the certificates yourself to find out
     * what valid hostnames might be.
     *
     * @return string[]
     */
    public function getCertHostnames()
    {
        return $this->certHostnames;
    }

    /**
     * @param $certHostnames
     *
     * @return $this
     */
    public function setCertHostnames($certHostnames)
    {
        $this->certHostnames = $certHostnames;

        return $this;
    }
}
