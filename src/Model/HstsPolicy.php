<?php

namespace Andyftw\SSLLabs\Model;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SerializedName;

class HstsPolicy
{
    /**
     * @Accessor(getter="getHeader", setter="setHeader")
     * @SerializedName("header")
     * @Type("string")
     */
    private $header;

    /**
     * @Accessor(getter="getStatus", setter="setStatus")
     * @SerializedName("status")
     * @Type("string")
     */
    private $status;

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
     * @Accessor(getter="getPreload", setter="setPreload")
     * @SerializedName("preload")
     * @Type("boolean")
     */
    private $preload;

    /**
     * @Accessor(getter="getDirectives", setter="setDirectives")
     * @SerializedName("directives")
     * @Type("array<string, string>")
     */
    private $directives;
    /**
     * the contents of the HSTS response header, if present.
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
     * HSTS status:.
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
     * error message when error is encountered, null otherwise.
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
     * the max-age value specified in the policy; null if policy is missing or invalid or on parsing error; the maximum value currently supported
     * is 9223372036854775807.
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
     * true if the preload directive is set; null otherwise.
     */
    public function getPreload()
    {
        return $this->preload;
    }

    public function setPreload($preload)
    {
        $this->preload = $preload;

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
