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
 * Class Endpoint
 *
 * @access public
 * @package Andyftw\SSLLabs\Model
 *
 * @Serializer\AccessType("public_method")
 */
class Endpoint
{
    /**
     * Endpoint IP address, in IPv4 or IPv6 format.
     *
     * @var string
     * @Serializer\Accessor(getter="getIpAddress", setter="setIpAddress")
     * @Serializer\SerializedName("ipAddress")
     * @Serializer\Type("string")
     */
    private $ipAddress;

    /**
     * Server name retrieved via reverse DNS.
     *
     * @var string
     * @Serializer\Accessor(getter="getServerName", setter="setServerName")
     * @Serializer\SerializedName("serverName")
     * @Serializer\Type("string")
     */
    private $serverName;

    /**
     * Assessment status message; this field will contain "Ready" if the endpoint assessment was successful.
     *
     * @var string
     * @Serializer\Accessor(getter="getStatusMessage", setter="setStatusMessage")
     * @Serializer\SerializedName("statusMessage")
     * @Serializer\Type("string")
     */
    private $statusMessage;

    /**
     * Code of the operation currently in progress.
     *
     * @var string
     * @Serializer\Accessor(getter="getStatusDetails", setter="setStatusDetails")
     * @Serializer\SerializedName("statusDetails")
     * @Serializer\Type("string")
     */
    private $statusDetails;

    /**
     * Description of the operation currently in progress.
     *
     * @var string
     * @Serializer\Accessor(getter="getStatusDetailsMessage", setter="setStatusDetailsMessage")
     * @Serializer\SerializedName("statusDetailsMessage")
     * @Serializer\Type("string")
     */
    private $statusDetailsMessage;

    /**
     * Possible values: A+, A-, A-F, T (no trust) and M (certificate name mismatch).
     *
     * @var string
     * @Serializer\Accessor(getter="getGrade", setter="setGrade")
     * @Serializer\SerializedName("grade")
     * @Serializer\Type("string")
     */
    private $grade;

    /**
     * Grade (as above), if trust issues are ignored.
     *
     * @var string
     * @Serializer\Accessor(getter="getGradeTrustIgnored", setter="setGradeTrustIgnored")
     * @Serializer\SerializedName("gradeTrustIgnored")
     * @Serializer\Type("string")
     */
    private $gradeTrustIgnored;

    /**
     * If this endpoint has warnings that might affect the score (e.g., get A- instead of A).
     *
     * @var boolean
     * @Serializer\Accessor(getter="getHasWarnings", setter="setHasWarnings")
     * @Serializer\SerializedName("hasWarnings")
     * @Serializer\Type("boolean")
     */
    private $hasWarnings;

    /**
     * This flag will be raised when an exceptional configuration is encountered. The SSL Labs test will give such
     * sites an A+.
     *
     * @var boolean
     * @Serializer\Accessor(getter="getIsExceptional", setter="setIsExceptional")
     * @Serializer\SerializedName("isExceptional")
     * @Serializer\Type("boolean")
     */
    private $isExceptional;

    /**
     * Assessment progress, which is a value from 0 to 100, and -1 if the assessment has not yet started.
     *
     * @var integer
     * @Serializer\Accessor(getter="getProgress", setter="setProgress")
     * @Serializer\SerializedName("progress")
     * @Serializer\Type("integer")
     */
    private $progress;

    /**
     * Assessment duration, in milliseconds.
     *
     * @var integer
     * @Serializer\Accessor(getter="getDuration", setter="setDuration")
     * @Serializer\SerializedName("duration")
     * @Serializer\Type("integer")
     */
    private $duration;

    /**
     * Estimated time, in seconds, until the completion of the assessment.
     *
     * @var integer
     * @Serializer\Accessor(getter="getEta", setter="setEta")
     * @Serializer\SerializedName("eta")
     * @Serializer\Type("integer")
     */
    private $eta;

    /**
     * Indicates domain name delegation with and without the www prefix.
     *
     * @var integer
     * @Serializer\Accessor(getter="getDelegation", setter="setDelegation")
     * @Serializer\SerializedName("delegation")
     * @Serializer\Type("integer")
     */
    private $delegation;

    /**
     * This field contains an EndpointDetails object. It's not present by default, but can be enabled by using the
     * "all" parameter to the `analyze` API call.
     *
     * @var Andyftw\SSLLabs\Model\EndpointDetails
     * @Serializer\Accessor(getter="getDetails", setter="setDetails")
     * @Serializer\SerializedName("details")
     * @Serializer\Type("Andyftw\SSLLabs\Model\EndpointDetails")
     */
    private $details;

    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * Endpoint IP address, in IPv4 or IPv6 format.
     *
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * @param $ipAddress
     *
     * @return $this
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    /**
     * Server name retrieved via reverse DNS.
     *
     * @return string
     */
    public function getServerName()
    {
        return $this->serverName;
    }

    /**
     * @param $serverName
     *
     * @return $this
     */
    public function setServerName($serverName)
    {
        $this->serverName = $serverName;

        return $this;
    }

    /**
     * Assessment status message; this field will contain "Ready" if the endpoint assessment was successful.
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
     * Code of the operation currently in progress.
     *
     * @return string
     */
    public function getStatusDetails()
    {
        return $this->statusDetails;
    }

    /**
     * @param $statusDetails
     *
     * @return $this
     */
    public function setStatusDetails($statusDetails)
    {
        $this->statusDetails = $statusDetails;

        return $this;
    }

    /**
     * Description of the operation currently in progress.
     *
     * @return string
     */
    public function getStatusDetailsMessage()
    {
        return $this->statusDetailsMessage;
    }

    /**
     * @param $statusDetailsMessage
     *
     * @return $this
     */
    public function setStatusDetailsMessage($statusDetailsMessage)
    {
        $this->statusDetailsMessage = $statusDetailsMessage;

        return $this;
    }

    /**
     * Possible values: A+, A-, A-F, T (no trust) and M (certificate name mismatch).
     *
     * @return string
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * @param $grade
     *
     * @return $this
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }

    /**
     * Grade (as above), if trust issues are ignored.
     *
     * @return string
     */
    public function getGradeTrustIgnored()
    {
        return $this->gradeTrustIgnored;
    }

    /**
     * @param $gradeTrustIgnored
     *
     * @return $this
     */
    public function setGradeTrustIgnored($gradeTrustIgnored)
    {
        $this->gradeTrustIgnored = $gradeTrustIgnored;

        return $this;
    }

    /**
     * If this endpoint has warnings that might affect the score (e.g., get A- instead of A).
     *
     * @return boolean
     */
    public function getHasWarnings()
    {
        return $this->hasWarnings;
    }

    /**
     * @param $hasWarnings
     *
     * @return $this
     */
    public function setHasWarnings($hasWarnings)
    {
        $this->hasWarnings = $hasWarnings;

        return $this;
    }

    /**
     * This flag will be raised when an exceptional configuration is encountered. The SSL Labs test will give such
     * sites an A+.
     *
     * @return boolean
     */
    public function getIsExceptional()
    {
        return $this->isExceptional;
    }

    /**
     * @param $isExceptional
     *
     * @return $this
     */
    public function setIsExceptional($isExceptional)
    {
        $this->isExceptional = $isExceptional;

        return $this;
    }

    /**
     * Assessment progress, which is a value from 0 to 100, and -1 if the assessment has not yet started.
     *
     * @return integer
     */
    public function getProgress()
    {
        return $this->progress;
    }

    /**
     * @param $progress
     *
     * @return $this
     */
    public function setProgress($progress)
    {
        $this->progress = $progress;

        return $this;
    }

    /**
     * Assessment duration, in milliseconds.
     *
     * @return integer
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param $duration
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Estimated time, in seconds, until the completion of the assessment.
     *
     * @return integer
     */
    public function getEta()
    {
        return $this->eta;
    }

    /**
     * @param $eta
     *
     * @return $this
     */
    public function setEta($eta)
    {
        $this->eta = $eta;

        return $this;
    }

    /**
     * Indicates domain name delegation with and without the www prefix.
     *
     * @return integer
     */
    public function getDelegation()
    {
        return $this->delegation;
    }

    /**
     * @param $delegation
     *
     * @return $this
     */
    public function setDelegation($delegation)
    {
        $this->delegation = $delegation;

        return $this;
    }

    /**
     * This field contains an EndpointDetails object. It's not present by default, but can be enabled by using the
     * "all" parameter to the `analyze` API call.
     *
     * @return Andyftw\SSLLabs\Model\EndpointDetails
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * @param $details
     *
     * @return $this
     */
    public function setDetails($details)
    {
        $this->details = $details;

        return $this;
    }
}
