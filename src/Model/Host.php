<?php

namespace Andyftw\SSLLabs\Model; 

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SerializedName;

class Host
{
    /**
     * @Accessor(getter="getHost", setter="setHost")
     * @SerializedName("host")
     * @Type("string")
     */
    private $host;

    /**
     * @Accessor(getter="getPort", setter="setPort")
     * @SerializedName("port")
     * @Type("integer")
     */
    private $port;

    /**
     * @Accessor(getter="getProtocol", setter="setProtocol")
     * @SerializedName("protocol")
     * @Type("string")
     */
    private $protocol;

    /**
     * @Accessor(getter="getIsPublic", setter="setIsPublic")
     * @SerializedName("isPublic")
     * @Type("boolean")
     */
    private $isPublic;

    /**
     * @Accessor(getter="getStatus", setter="setStatus")
     * @SerializedName("status")
     * @Type("string")
     */
    private $status;

    /**
     * @Accessor(getter="getStatusMessage", setter="setStatusMessage")
     * @SerializedName("statusMessage")
     * @Type("string")
     */
    private $statusMessage;

    /**
     * @Accessor(getter="getStartTime", setter="setStartTime")
     * @SerializedName("startTime")
     * @Type("integer")
     */
    private $startTime;

    /**
     * @Accessor(getter="getTestTime", setter="setTestTime")
     * @SerializedName("testTime")
     * @Type("integer")
     */
    private $testTime;

    /**
     * @Accessor(getter="getEngineVersion", setter="setEngineVersion")
     * @SerializedName("engineVersion")
     * @Type("string")
     */
    private $engineVersion;

    /**
     * @Accessor(getter="getCriteriaVersion", setter="setCriteriaVersion")
     * @SerializedName("criteriaVersion")
     * @Type("string")
     */
    private $criteriaVersion;

    /**
     * @Accessor(getter="getCacheExpiryTime", setter="setCacheExpiryTime")
     * @SerializedName("cacheExpiryTime")
     * @Type("integer")
     */
    private $cacheExpiryTime;

    /**
     * @Accessor(getter="getEndpoints", setter="setEndpoints")
     * @SerializedName("endpoints")
     * @Type("array<Andyftw\SSLLabs\Model\Endpoint>")
     */
    private $endpoints;

    /**
     * @Accessor(getter="getCertHostnames", setter="setCertHostnames")
     * @SerializedName("certHostnames")
     * @Type("array<string>")
     */
    private $certHostnames;


    /**
     * assessment host, which can be a hostname or an IP address
     */
    public function getHost()
    {
        return $this->host;
    }
    
    public function setHost($host)
    {
        $this->host = $host;
        return $this;
    }

    /**
     * assessment port (e.g., 443)
     */
    public function getPort()
    {
        return $this->port;
    }
    
    public function setPort($port)
    {
        $this->port = $port;
        return $this;
    }

    /**
     * protocol (e.g., HTTP)
     */
    public function getProtocol()
    {
        return $this->protocol;
    }
    
    public function setProtocol($protocol)
    {
        $this->protocol = $protocol;
        return $this;
    }

    /**
     * true if this assessment is publicly available (listed on the SSL Labs assessment boards)
     */
    public function getIsPublic()
    {
        return $this->isPublic;
    }
    
    public function setIsPublic($isPublic)
    {
        $this->isPublic = $isPublic;
        return $this;
    }

    /**
     * assessment status; possible values: DNS, ERROR, IN_PROGRESS, and READY.
     */
    public function getStatus()
    {
        return $this->status;
    }
    
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * status message in English. When status is ERROR, this field will contain an error message.
     */
    public function getStatusMessage()
    {
        return $this->statusMessage;
    }
    
    public function setStatusMessage($statusMessage)
    {
        $this->statusMessage = $statusMessage;
        return $this;
    }

    /**
     * assessment starting time, in milliseconds since 1970
     */
    public function getStartTime()
    {
        return $this->startTime;
    }
    
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * assessment completion time, in milliseconds since 1970
     */
    public function getTestTime()
    {
        return $this->testTime;
    }
    
    public function setTestTime($testTime)
    {
        $this->testTime = $testTime;
        return $this;
    }

    /**
     * assessment engine version (e.g., "1.0.120")
     */
    public function getEngineVersion()
    {
        return $this->engineVersion;
    }
    
    public function setEngineVersion($engineVersion)
    {
        $this->engineVersion = $engineVersion;
        return $this;
    }

    /**
     * grading criteria version (e.g., "2009")
     */
    public function getCriteriaVersion()
    {
        return $this->criteriaVersion;
    }
    
    public function setCriteriaVersion($criteriaVersion)
    {
        $this->criteriaVersion = $criteriaVersion;
        return $this;
    }

    /**
     * when will the assessment results expire from the cache (typically set only for assessment with errors; otherwise the results stay in the
     * cache for as long as there's sufficient room)
     */
    public function getCacheExpiryTime()
    {
        return $this->cacheExpiryTime;
    }
    
    public function setCacheExpiryTime($cacheExpiryTime)
    {
        $this->cacheExpiryTime = $cacheExpiryTime;
        return $this;
    }

    /**
     * list of [Endpoint objects](#endpoint)
     */
    public function getEndpoints()
    {
        return $this->endpoints;
    }
    
    public function setEndpoints($endpoints)
    {
        $this->endpoints = $endpoints;
        return $this;
    }

    /**
     * the list of certificate hostnames collected from the certificates seen during assessment. The hostnames may not be valid. This field is
     * available only if the server certificate doesn't match the requested hostname. In that case, this field saves you some time as you don't
     * have to inspect the certificates yourself to find out what valid hostnames might be.
     */
    public function getCertHostnames()
    {
        return $this->certHostnames;
    }
    
    public function setCertHostnames($certHostnames)
    {
        $this->certHostnames = $certHostnames;
        return $this;
    }

}
