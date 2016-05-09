<?php

namespace Andyftw\SSLLabs\Model;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SerializedName;

class HpkpPolicy
{
    /**
     * @Accessor(getter="getStatus", setter="setStatus")
     * @SerializedName("status")
     * @Type("string")
     */
    private $status;

    /**
     * @Accessor(getter="getHeader", setter="setHeader")
     * @SerializedName("header")
     * @Type("string")
     */
    private $header;

    /**
     * @Accessor(getter="getError", setter="setError")
     * @SerializedName("error")
     * @Type("string")
     */
    private $error;

    /**
     * @Accessor(getter="getMaxAge", setter="setMaxAge")
     * @SerializedName("maxAge")
     * @Type("integer")
     */
    private $maxAge;

    /**
     * @Accessor(getter="getIncludeSubDomains", setter="setIncludeSubDomains")
     * @SerializedName("includeSubDomains")
     * @Type("boolean")
     */
    private $includeSubDomains;

    /**
     * @Accessor(getter="getReportUri", setter="setReportUri")
     * @SerializedName("reportUri")
     * @Type("string")
     */
    private $reportUri;

    /**
     * @Accessor(getter="getPins", setter="setPins")
     * @SerializedName("pins")
     * @Type("array<Andyftw\SSLLabs\Model\HpkpPin>")
     */
    private $pins;

    /**
     * @Accessor(getter="getMatchedPins", setter="setMatchedPins")
     * @SerializedName("matchedPins")
     * @Type("array<Andyftw\SSLLabs\Model\HpkpPin>")
     */
    private $matchedPins;

    /**
     * @Accessor(getter="getDirectives", setter="setDirectives")
     * @SerializedName("directives")
     * @Type("array<string, string>")
     */
    private $directives;
    /**
     * HPKP status:.
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
     * the contents of the HPKP response header, if present.
     */
    public function getHeader()
    {
        return $this->header;
    }

    public function setHeader($header)
    {
        $this->header = $header;

        return $this;
    }

    /**
     * error message, when the policy is invalid.
     */
    public function getError()
    {
        return $this->error;
    }

    public function setError($error)
    {
        $this->error = $error;

        return $this;
    }

    /**
     * the max-age value from the policy.
     */
    public function getMaxAge()
    {
        return $this->maxAge;
    }

    public function setMaxAge($maxAge)
    {
        $this->maxAge = $maxAge;

        return $this;
    }

    /**
     * true if the includeSubDomains directive is set; null otherwise.
     */
    public function getIncludeSubDomains()
    {
        return $this->includeSubDomains;
    }

    public function setIncludeSubDomains($includeSubDomains)
    {
        $this->includeSubDomains = $includeSubDomains;

        return $this;
    }

    /**
     * the report-uri value from the policy.
     */
    public function getReportUri()
    {
        return $this->reportUri;
    }

    public function setReportUri($reportUri)
    {
        $this->reportUri = $reportUri;

        return $this;
    }

    /**
     * list of all pins used by the policy.
     */
    public function getPins()
    {
        return $this->pins;
    }

    public function setPins($pins)
    {
        $this->pins = $pins;

        return $this;
    }

    /**
     * list of pins that match the current configuration.
     */
    public function getMatchedPins()
    {
        return $this->matchedPins;
    }

    public function setMatchedPins($matchedPins)
    {
        $this->matchedPins = $matchedPins;

        return $this;
    }

    /**
     * list of raw policy directives.
     */
    public function getDirectives()
    {
        return $this->directives;
    }

    public function setDirectives($directives)
    {
        $this->directives = $directives;

        return $this;
    }
}
