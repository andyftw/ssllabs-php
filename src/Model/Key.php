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
 * Class Key
 *
 * @access public
 * @package Andyftw\SSLLabs\Model
 *
 * @Serializer\AccessType("public_method")
 */
class Key
{
    /**
     * Key size, e.g., 1024 or 2048 for RSA and DSA, or 256 bits for EC.
     *
     * @var integer
     * @Serializer\Accessor(getter="getSize", setter="setSize")
     * @Serializer\SerializedName("size")
     * @Serializer\Type("integer")
     */
    private $size;

    /**
     * Key size expressed in RSA bits.
     *
     * @var integer
     * @Serializer\Accessor(getter="getStrength", setter="setStrength")
     * @Serializer\SerializedName("strength")
     * @Serializer\Type("integer")
     */
    private $strength;

    /**
     * Key algorithm; possible values: RSA, DSA, and EC.
     *
     * @var string
     * @Serializer\Accessor(getter="getAlg", setter="setAlg")
     * @Serializer\SerializedName("alg")
     * @Serializer\Type("string")
     */
    private $alg;

    /**
     * True if we suspect that the key was generated using a weak random number generator (detected via a blacklist
     * database).
     *
     * @var boolean
     * @Serializer\Accessor(getter="getDebianFlaw", setter="setDebianFlaw")
     * @Serializer\SerializedName("debianFlaw")
     * @Serializer\Type("boolean")
     */
    private $debianFlaw;

    /**
     * 0 if key is insecure, null otherwise.
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
     * Key size, e.g., 1024 or 2048 for RSA and DSA, or 256 bits for EC.
     *
     * @return integer
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param $size
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Key size expressed in RSA bits.
     *
     * @return integer
     */
    public function getStrength()
    {
        return $this->strength;
    }

    /**
     * @param $strength
     *
     * @return $this
     */
    public function setStrength($strength)
    {
        $this->strength = $strength;

        return $this;
    }

    /**
     * Key algorithm; possible values: RSA, DSA, and EC.
     *
     * @return string
     */
    public function getAlg()
    {
        return $this->alg;
    }

    /**
     * @param $alg
     *
     * @return $this
     */
    public function setAlg($alg)
    {
        $this->alg = $alg;

        return $this;
    }

    /**
     * True if we suspect that the key was generated using a weak random number generator (detected via a blacklist
     * database).
     *
     * @return boolean
     */
    public function getDebianFlaw()
    {
        return $this->debianFlaw;
    }

    /**
     * @param $debianFlaw
     *
     * @return $this
     */
    public function setDebianFlaw($debianFlaw)
    {
        $this->debianFlaw = $debianFlaw;

        return $this;
    }

    /**
     * 0 if key is insecure, null otherwise.
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
