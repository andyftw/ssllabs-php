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
 * Class Simulation.
 *
 *
 * @Serializer\AccessType("public_method")
 */
class Simulation
{
    /**
     * Instance of [SimClient](#simclient).
     *
     * @var Andyftw\SSLLabs\Model\SimClient
     * @Serializer\Accessor(getter="getClient", setter="setClient")
     * @Serializer\SerializedName("client")
     * @Serializer\Type("Andyftw\SSLLabs\Model\SimClient")
     */
    private $client;

    /**
     * Zero if handshake was successful, 1 if it was not.
     *
     * @var int
     * @Serializer\Accessor(getter="getErrorCode", setter="setErrorCode")
     * @Serializer\SerializedName("errorCode")
     * @Serializer\Type("integer")
     */
    private $errorCode;

    /**
     * Always 1 with the current implementation.
     *
     * @var int
     * @Serializer\Accessor(getter="getAttempts", setter="setAttempts")
     * @Serializer\SerializedName("attempts")
     * @Serializer\Type("integer")
     */
    private $attempts;

    /**
     * Negotiated protocol ID.
     *
     * @var int
     * @Serializer\Accessor(getter="getProtocolId", setter="setProtocolId")
     * @Serializer\SerializedName("protocolId")
     * @Serializer\Type("integer")
     */
    private $protocolId;

    /**
     * Negotiated suite ID.
     *
     * @var int
     * @Serializer\Accessor(getter="getSuiteId", setter="setSuiteId")
     * @Serializer\SerializedName("suiteId")
     * @Serializer\Type("integer")
     */
    private $suiteId;

    /**
     * Constructor.
     */
    public function __construct()
    {
    }

    /**
     * Instance of [SimClient](#simclient).
     *
     * @return Andyftw\SSLLabs\Model\SimClient
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param $client
     *
     * @return $this
     */
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Zero if handshake was successful, 1 if it was not.
     *
     * @return int
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * @param $errorCode
     *
     * @return $this
     */
    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;

        return $this;
    }

    /**
     * Always 1 with the current implementation.
     *
     * @return int
     */
    public function getAttempts()
    {
        return $this->attempts;
    }

    /**
     * @param $attempts
     *
     * @return $this
     */
    public function setAttempts($attempts)
    {
        $this->attempts = $attempts;

        return $this;
    }

    /**
     * Negotiated protocol ID.
     *
     * @return int
     */
    public function getProtocolId()
    {
        return $this->protocolId;
    }

    /**
     * @param $protocolId
     *
     * @return $this
     */
    public function setProtocolId($protocolId)
    {
        $this->protocolId = $protocolId;

        return $this;
    }

    /**
     * Negotiated suite ID.
     *
     * @return int
     */
    public function getSuiteId()
    {
        return $this->suiteId;
    }

    /**
     * @param $suiteId
     *
     * @return $this
     */
    public function setSuiteId($suiteId)
    {
        $this->suiteId = $suiteId;

        return $this;
    }
}
