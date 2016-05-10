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
 * Class HpkpPolicy
 *
 * @access public
 * @package Andyftw\SSLLabs\Model
 *
 * @Serializer\AccessType("public_method")
 */
class HpkpPolicy
{
    /**
     * HPKP status:.
     *
     * @var string
     * @Serializer\Accessor(getter="getStatus", setter="setStatus")
     * @Serializer\SerializedName("status")
     * @Serializer\Type("string")
     */
    private $status;

    /**
     * The contents of the HPKP response header, if present.
     *
     * @var string
     * @Serializer\Accessor(getter="getHeader", setter="setHeader")
     * @Serializer\SerializedName("header")
     * @Serializer\Type("string")
     */
    private $header;

    /**
     * Error message, when the policy is invalid.
     *
     * @var string
     * @Serializer\Accessor(getter="getError", setter="setError")
     * @Serializer\SerializedName("error")
     * @Serializer\Type("string")
     */
    private $error;

    /**
     * The max-age value from the policy.
     *
     * @var integer
     * @Serializer\Accessor(getter="getMaxAge", setter="setMaxAge")
     * @Serializer\SerializedName("maxAge")
     * @Serializer\Type("integer")
     */
    private $maxAge;

    /**
     * True if the includeSubDomains directive is set; null otherwise.
     *
     * @var boolean
     * @Serializer\Accessor(getter="getIncludeSubDomains", setter="setIncludeSubDomains")
     * @Serializer\SerializedName("includeSubDomains")
     * @Serializer\Type("boolean")
     */
    private $includeSubDomains;

    /**
     * The report-uri value from the policy.
     *
     * @var string
     * @Serializer\Accessor(getter="getReportUri", setter="setReportUri")
     * @Serializer\SerializedName("reportUri")
     * @Serializer\Type("string")
     */
    private $reportUri;

    /**
     * List of all pins used by the policy.
     *
     * @var Andyftw\SSLLabs\Model\HpkpPin[]
     * @Serializer\Accessor(getter="getPins", setter="setPins")
     * @Serializer\SerializedName("pins")
     * @Serializer\Type("array<Andyftw\SSLLabs\Model\HpkpPin>")
     */
    private $pins;

    /**
     * List of pins that match the current configuration.
     *
     * @var Andyftw\SSLLabs\Model\HpkpPin[]
     * @Serializer\Accessor(getter="getMatchedPins", setter="setMatchedPins")
     * @Serializer\SerializedName("matchedPins")
     * @Serializer\Type("array<Andyftw\SSLLabs\Model\HpkpPin>")
     */
    private $matchedPins;

    /**
     * List of raw policy directives.
     *
     * @var string[]
     * @Serializer\Accessor(getter="getDirectives", setter="setDirectives")
     * @Serializer\SerializedName("directives")
     * @Serializer\Type("array<string>")
     */
    private $directives;

    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * HPKP status:.
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
     * The contents of the HPKP response header, if present.
     *
     * @return string
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * @param $header
     *
     * @return $this
     */
    public function setHeader($header)
    {
        $this->header = $header;

        return $this;
    }

    /**
     * Error message, when the policy is invalid.
     *
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param $error
     *
     * @return $this
     */
    public function setError($error)
    {
        $this->error = $error;

        return $this;
    }

    /**
     * The max-age value from the policy.
     *
     * @return integer
     */
    public function getMaxAge()
    {
        return $this->maxAge;
    }

    /**
     * @param $maxAge
     *
     * @return $this
     */
    public function setMaxAge($maxAge)
    {
        $this->maxAge = $maxAge;

        return $this;
    }

    /**
     * True if the includeSubDomains directive is set; null otherwise.
     *
     * @return boolean
     */
    public function getIncludeSubDomains()
    {
        return $this->includeSubDomains;
    }

    /**
     * @param $includeSubDomains
     *
     * @return $this
     */
    public function setIncludeSubDomains($includeSubDomains)
    {
        $this->includeSubDomains = $includeSubDomains;

        return $this;
    }

    /**
     * The report-uri value from the policy.
     *
     * @return string
     */
    public function getReportUri()
    {
        return $this->reportUri;
    }

    /**
     * @param $reportUri
     *
     * @return $this
     */
    public function setReportUri($reportUri)
    {
        $this->reportUri = $reportUri;

        return $this;
    }

    /**
     * List of all pins used by the policy.
     *
     * @return Andyftw\SSLLabs\Model\HpkpPin[]
     */
    public function getPins()
    {
        return $this->pins;
    }

    /**
     * @param $pins
     *
     * @return $this
     */
    public function setPins($pins)
    {
        $this->pins = $pins;

        return $this;
    }

    /**
     * List of pins that match the current configuration.
     *
     * @return Andyftw\SSLLabs\Model\HpkpPin[]
     */
    public function getMatchedPins()
    {
        return $this->matchedPins;
    }

    /**
     * @param $matchedPins
     *
     * @return $this
     */
    public function setMatchedPins($matchedPins)
    {
        $this->matchedPins = $matchedPins;

        return $this;
    }

    /**
     * List of raw policy directives.
     *
     * @return string[]
     */
    public function getDirectives()
    {
        return $this->directives;
    }

    /**
     * @param $directives
     *
     * @return $this
     */
    public function setDirectives($directives)
    {
        $this->directives = $directives;

        return $this;
    }
}
