<?php

namespace Andyftw\SSLLabs\Model;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SerializedName;

class HstsPreload
{
    /**
     * @Accessor(getter="getSource", setter="setSource")
     * @SerializedName("source")
     * @Type("string")
     */
    private $source;

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
     * @Accessor(getter="getSourceTime", setter="setSourceTime")
     * @SerializedName("sourceTime")
     * @Type("integer")
     */
    private $sourceTime;
    /**
     * source name.
     */
    public function getSource()
    {
        return $this->source;
    }

    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * preload status:.
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
     * error message, when status is "error".
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
     * time, as a Unix timestamp, when the preload database was retrieved.
     */
    public function getSourceTime()
    {
        return $this->sourceTime;
    }

    public function setSourceTime($sourceTime)
    {
        $this->sourceTime = $sourceTime;

        return $this;
    }
}
