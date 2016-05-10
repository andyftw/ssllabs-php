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
 * Class HstsPolicy
 *
 * @access public
 * @package Andyftw\SSLLabs\Model
 *
 * @Serializer\AccessType("public_method")
 */
class HstsPolicy
{
    /**
     * The contents of the HSTS response header, if present.
     *
     * @var string
     * @Serializer\Accessor(getter="getHeader", setter="setHeader")
     * @Serializer\SerializedName("header")
     * @Serializer\Type("string")
     */
    private $header;

    /**
     * HSTS status:.
     *
     * @var string
     * @Serializer\Accessor(getter="getStatus", setter="setStatus")
     * @Serializer\SerializedName("status")
     * @Serializer\Type("string")
     */
    private $status;

    /**
     * Error message when error is encountered, null otherwise.
     *
     * @var string
     * @Serializer\Accessor(getter="getError", setter="setError")
     * @Serializer\SerializedName("error")
     * @Serializer\Type("string")
     */
    private $error;

    /**
     * The max-age value specified in the policy; null if policy is missing or invalid or on parsing error; the
     * maximum value currently supported is 9223372036854775807.
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
     * True if the preload directive is set; null otherwise.
     *
     * @var boolean
     * @Serializer\Accessor(getter="getPreload", setter="setPreload")
     * @Serializer\SerializedName("preload")
     * @Serializer\Type("boolean")
     */
    private $preload;

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
     * The contents of the HSTS response header, if present.
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
     * HSTS status:.
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
     * Error message when error is encountered, null otherwise.
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
     * The max-age value specified in the policy; null if policy is missing or invalid or on parsing error; the
     * maximum value currently supported is 9223372036854775807.
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
     * True if the preload directive is set; null otherwise.
     *
     * @return boolean
     */
    public function getPreload()
    {
        return $this->preload;
    }

    /**
     * @param $preload
     *
     * @return $this
     */
    public function setPreload($preload)
    {
        $this->preload = $preload;

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
