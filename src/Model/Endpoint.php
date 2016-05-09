<?php

namespace Andyftw\SSLLabs\Model; 

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SerializedName;

class Endpoint
{
    /**
     * @Accessor(getter="getIpAddress", setter="setIpAddress")
     * @SerializedName("ipAddress")
     * @Type("string")
     */
    private $ipAddress;

    /**
     * @Accessor(getter="getServerName", setter="setServerName")
     * @SerializedName("serverName")
     * @Type("string")
     */
    private $serverName;

    /**
     * @Accessor(getter="getStatusMessage", setter="setStatusMessage")
     * @SerializedName("statusMessage")
     * @Type("string")
     */
    private $statusMessage;

    /**
     * @Accessor(getter="getStatusDetails", setter="setStatusDetails")
     * @SerializedName("statusDetails")
     * @Type("string")
     */
    private $statusDetails;

    /**
     * @Accessor(getter="getStatusDetailsMessage", setter="setStatusDetailsMessage")
     * @SerializedName("statusDetailsMessage")
     * @Type("string")
     */
    private $statusDetailsMessage;

    /**
     * @Accessor(getter="getGrade", setter="setGrade")
     * @SerializedName("grade")
     * @Type("string")
     */
    private $grade;

    /**
     * @Accessor(getter="getGradeTrustIgnored", setter="setGradeTrustIgnored")
     * @SerializedName("gradeTrustIgnored")
     * @Type("string")
     */
    private $gradeTrustIgnored;

    /**
     * @Accessor(getter="getHasWarnings", setter="setHasWarnings")
     * @SerializedName("hasWarnings")
     * @Type("boolean")
     */
    private $hasWarnings;

    /**
     * @Accessor(getter="getIsExceptional", setter="setIsExceptional")
     * @SerializedName("isExceptional")
     * @Type("boolean")
     */
    private $isExceptional;

    /**
     * @Accessor(getter="getProgress", setter="setProgress")
     * @SerializedName("progress")
     * @Type("integer")
     */
    private $progress;

    /**
     * @Accessor(getter="getDuration", setter="setDuration")
     * @SerializedName("duration")
     * @Type("integer")
     */
    private $duration;

    /**
     * @Accessor(getter="getEta", setter="setEta")
     * @SerializedName("eta")
     * @Type("integer")
     */
    private $eta;

    /**
     * @Accessor(getter="getDelegation", setter="setDelegation")
     * @SerializedName("delegation")
     * @Type("integer")
     */
    private $delegation;

    /**
     * @Accessor(getter="getDetails", setter="setDetails")
     * @SerializedName("details")
     * @Type("Andyftw\SSLLabs\Model\EndpointDetails")
     */
    private $details;


    /**
     * endpoint IP address, in IPv4 or IPv6 format.
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }
    
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;
        return $this;
    }

    /**
     * server name retrieved via reverse DNS
     */
    public function getServerName()
    {
        return $this->serverName;
    }
    
    public function setServerName($serverName)
    {
        $this->serverName = $serverName;
        return $this;
    }

    /**
     * assessment status message; this field will contain "Ready" if the endpoint assessment was successful.
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
     * code of the operation currently in progress
     */
    public function getStatusDetails()
    {
        return $this->statusDetails;
    }
    
    public function setStatusDetails($statusDetails)
    {
        $this->statusDetails = $statusDetails;
        return $this;
    }

    /**
     * description of the operation currently in progress
     */
    public function getStatusDetailsMessage()
    {
        return $this->statusDetailsMessage;
    }
    
    public function setStatusDetailsMessage($statusDetailsMessage)
    {
        $this->statusDetailsMessage = $statusDetailsMessage;
        return $this;
    }

    /**
     * possible values: A+, A-, A-F, T (no trust) and M (certificate name mismatch)
     */
    public function getGrade()
    {
        return $this->grade;
    }
    
    public function setGrade($grade)
    {
        $this->grade = $grade;
        return $this;
    }

    /**
     * grade (as above), if trust issues are ignored
     */
    public function getGradeTrustIgnored()
    {
        return $this->gradeTrustIgnored;
    }
    
    public function setGradeTrustIgnored($gradeTrustIgnored)
    {
        $this->gradeTrustIgnored = $gradeTrustIgnored;
        return $this;
    }

    /**
     * if this endpoint has warnings that might affect the score (e.g., get A- instead of A).
     */
    public function getHasWarnings()
    {
        return $this->hasWarnings;
    }
    
    public function setHasWarnings($hasWarnings)
    {
        $this->hasWarnings = $hasWarnings;
        return $this;
    }

    /**
     * this flag will be raised when an exceptional configuration is encountered. The SSL Labs test will give such sites an A+.
     */
    public function getIsExceptional()
    {
        return $this->isExceptional;
    }
    
    public function setIsExceptional($isExceptional)
    {
        $this->isExceptional = $isExceptional;
        return $this;
    }

    /**
     * assessment progress, which is a value from 0 to 100, and -1 if the assessment has not yet started
     */
    public function getProgress()
    {
        return $this->progress;
    }
    
    public function setProgress($progress)
    {
        $this->progress = $progress;
        return $this;
    }

    /**
     * assessment duration, in milliseconds
     */
    public function getDuration()
    {
        return $this->duration;
    }
    
    public function setDuration($duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * estimated time, in seconds, until the completion of the assessment
     */
    public function getEta()
    {
        return $this->eta;
    }
    
    public function setEta($eta)
    {
        $this->eta = $eta;
        return $this;
    }

    /**
     * indicates domain name delegation with and without the www prefix
     */
    public function getDelegation()
    {
        return $this->delegation;
    }
    
    public function setDelegation($delegation)
    {
        $this->delegation = $delegation;
        return $this;
    }

    /**
     * this field contains an EndpointDetails object. It's not present by default, but can be enabled by using the "all" parameter to the `analyze`
     * API call.
     */
    public function getDetails()
    {
        return $this->details;
    }
    
    public function setDetails($details)
    {
        $this->details = $details;
        return $this;
    }

}
