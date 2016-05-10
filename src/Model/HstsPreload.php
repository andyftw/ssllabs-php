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
 * Class HstsPreload
 *
 * @access public
 * @package Andyftw\SSLLabs\Model
 *
 * @Serializer\AccessType("public_method")
 */
class HstsPreload
{
    /**
     * Source name.
     *
     * @var string
     * @Serializer\Accessor(getter="getSource", setter="setSource")
     * @Serializer\SerializedName("source")
     * @Serializer\Type("string")
     */
    private $source;

    /**
     * Preload status:.
     *
     * @var string
     * @Serializer\Accessor(getter="getStatus", setter="setStatus")
     * @Serializer\SerializedName("status")
     * @Serializer\Type("string")
     */
    private $status;

    /**
     * Error message, when status is "error".
     *
     * @var string
     * @Serializer\Accessor(getter="getError", setter="setError")
     * @Serializer\SerializedName("error")
     * @Serializer\Type("string")
     */
    private $error;

    /**
     * Time, as a Unix timestamp, when the preload database was retrieved.
     *
     * @var integer
     * @Serializer\Accessor(getter="getSourceTime", setter="setSourceTime")
     * @Serializer\SerializedName("sourceTime")
     * @Serializer\Type("integer")
     */
    private $sourceTime;

    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * Source name.
     *
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param $source
     *
     * @return $this
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Preload status:.
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
     * Error message, when status is "error".
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
     * Time, as a Unix timestamp, when the preload database was retrieved.
     *
     * @return integer
     */
    public function getSourceTime()
    {
        return $this->sourceTime;
    }

    /**
     * @param $sourceTime
     *
     * @return $this
     */
    public function setSourceTime($sourceTime)
    {
        $this->sourceTime = $sourceTime;

        return $this;
    }
}
