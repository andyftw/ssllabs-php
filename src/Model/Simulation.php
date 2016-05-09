<?php

namespace Andyftw\SSLLabs\Model;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SerializedName;

class Simulation
{
    /**
     * @Accessor(getter="getClient", setter="setClient")
     * @SerializedName("client")
     * @Type("Andyftw\SSLLabs\Model\SimClient")
     */
    private $client;

    /**
     * @Accessor(getter="getErrorCode", setter="setErrorCode")
     * @SerializedName("errorCode")
     * @Type("integer")
     */
    private $errorCode;

    /**
     * @Accessor(getter="getAttempts", setter="setAttempts")
     * @SerializedName("attempts")
     * @Type("integer")
     */
    private $attempts;

    /**
     * @Accessor(getter="getProtocolId", setter="setProtocolId")
     * @SerializedName("protocolId")
     * @Type("integer")
     */
    private $protocolId;

    /**
     * @Accessor(getter="getSuiteId", setter="setSuiteId")
     * @SerializedName("suiteId")
     * @Type("integer")
     */
    private $suiteId;
    /**
     * instance of [SimClient](#simclient).
     */
    public function getClient()
    {
        return $this->client;
    }

    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * zero if handshake was successful, 1 if it was not.
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;

        return $this;
    }

    /**
     * always 1 with the current implementation.
     */
    public function getAttempts()
    {
        return $this->attempts;
    }

    public function setAttempts($attempts)
    {
        $this->attempts = $attempts;

        return $this;
    }

    /**
     * Negotiated protocol ID.
     */
    public function getProtocolId()
    {
        return $this->protocolId;
    }

    public function setProtocolId($protocolId)
    {
        $this->protocolId = $protocolId;

        return $this;
    }

    /**
     * Negotiated suite ID.
     */
    public function getSuiteId()
    {
        return $this->suiteId;
    }

    public function setSuiteId($suiteId)
    {
        $this->suiteId = $suiteId;

        return $this;
    }
}
