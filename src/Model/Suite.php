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
 * Class Suite
 *
 * @access public
 * @package Andyftw\SSLLabs\Model
 *
 * @Serializer\AccessType("public_method")
 */
class Suite
{
    /**
     * Suite RFC ID (e.g., 5).
     *
     * @var integer
     * @Serializer\Accessor(getter="getId", setter="setId")
     * @Serializer\SerializedName("id")
     * @Serializer\Type("integer")
     */
    private $id;

    /**
     * Suite name (e.g., TLS_RSA_WITH_RC4_128_SHA).
     *
     * @var string
     * @Serializer\Accessor(getter="getName", setter="setName")
     * @Serializer\SerializedName("name")
     * @Serializer\Type("string")
     */
    private $name;

    /**
     * Suite strength (e.g., 128).
     *
     * @var integer
     * @Serializer\Accessor(getter="getCipherStrength", setter="setCipherStrength")
     * @Serializer\SerializedName("cipherStrength")
     * @Serializer\Type("integer")
     */
    private $cipherStrength;

    /**
     * Strength of DH params (e.g., 1024).
     *
     * @var integer
     * @Serializer\Accessor(getter="getDhStrength", setter="setDhStrength")
     * @Serializer\SerializedName("dhStrength")
     * @Serializer\Type("integer")
     */
    private $dhStrength;

    /**
     * DH params, p component.
     *
     * @var integer
     * @Serializer\Accessor(getter="getDhP", setter="setDhP")
     * @Serializer\SerializedName("dhP")
     * @Serializer\Type("integer")
     */
    private $dhP;

    /**
     * DH params, g component.
     *
     * @var integer
     * @Serializer\Accessor(getter="getDhG", setter="setDhG")
     * @Serializer\SerializedName("dhG")
     * @Serializer\Type("integer")
     */
    private $dhG;

    /**
     * DH params, Ys component.
     *
     * @var integer
     * @Serializer\Accessor(getter="getDhYs", setter="setDhYs")
     * @Serializer\SerializedName("dhYs")
     * @Serializer\Type("integer")
     */
    private $dhYs;

    /**
     * ECDH bits.
     *
     * @var integer
     * @Serializer\Accessor(getter="getEcdhBits", setter="setEcdhBits")
     * @Serializer\SerializedName("ecdhBits")
     * @Serializer\Type("integer")
     */
    private $ecdhBits;

    /**
     * ECDH RSA-equivalent strength.
     *
     * @var integer
     * @Serializer\Accessor(getter="getEcdhStrength", setter="setEcdhStrength")
     * @Serializer\SerializedName("ecdhStrength")
     * @Serializer\Type("integer")
     */
    private $ecdhStrength;

    /**
     * 0 if the suite is insecure, null otherwise.
     *
     * @var integer
     * @Serializer\Accessor(getter="getQ", setter="setQ")
     * @Serializer\SerializedName("q")
     * @Serializer\Type("integer")
     */
    private $q;

    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * Suite RFC ID (e.g., 5).
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Suite name (e.g., TLS_RSA_WITH_RC4_128_SHA).
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Suite strength (e.g., 128).
     *
     * @return integer
     */
    public function getCipherStrength()
    {
        return $this->cipherStrength;
    }

    /**
     * @param $cipherStrength
     *
     * @return $this
     */
    public function setCipherStrength($cipherStrength)
    {
        $this->cipherStrength = $cipherStrength;

        return $this;
    }

    /**
     * Strength of DH params (e.g., 1024).
     *
     * @return integer
     */
    public function getDhStrength()
    {
        return $this->dhStrength;
    }

    /**
     * @param $dhStrength
     *
     * @return $this
     */
    public function setDhStrength($dhStrength)
    {
        $this->dhStrength = $dhStrength;

        return $this;
    }

    /**
     * DH params, p component.
     *
     * @return integer
     */
    public function getDhP()
    {
        return $this->dhP;
    }

    /**
     * @param $dhP
     *
     * @return $this
     */
    public function setDhP($dhP)
    {
        $this->dhP = $dhP;

        return $this;
    }

    /**
     * DH params, g component.
     *
     * @return integer
     */
    public function getDhG()
    {
        return $this->dhG;
    }

    /**
     * @param $dhG
     *
     * @return $this
     */
    public function setDhG($dhG)
    {
        $this->dhG = $dhG;

        return $this;
    }

    /**
     * DH params, Ys component.
     *
     * @return integer
     */
    public function getDhYs()
    {
        return $this->dhYs;
    }

    /**
     * @param $dhYs
     *
     * @return $this
     */
    public function setDhYs($dhYs)
    {
        $this->dhYs = $dhYs;

        return $this;
    }

    /**
     * ECDH bits.
     *
     * @return integer
     */
    public function getEcdhBits()
    {
        return $this->ecdhBits;
    }

    /**
     * @param $ecdhBits
     *
     * @return $this
     */
    public function setEcdhBits($ecdhBits)
    {
        $this->ecdhBits = $ecdhBits;

        return $this;
    }

    /**
     * ECDH RSA-equivalent strength.
     *
     * @return integer
     */
    public function getEcdhStrength()
    {
        return $this->ecdhStrength;
    }

    /**
     * @param $ecdhStrength
     *
     * @return $this
     */
    public function setEcdhStrength($ecdhStrength)
    {
        $this->ecdhStrength = $ecdhStrength;

        return $this;
    }

    /**
     * 0 if the suite is insecure, null otherwise.
     *
     * @return integer
     */
    public function getQ()
    {
        return $this->q;
    }

    /**
     * @param $q
     *
     * @return $this
     */
    public function setQ($q)
    {
        $this->q = $q;

        return $this;
    }
}
