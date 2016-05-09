<?php

namespace Andyftw\SSLLabs\Model; 

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SerializedName;

class Key
{
    /**
     * @Accessor(getter="getSize", setter="setSize")
     * @SerializedName("size")
     * @Type("integer")
     */
    private $size;

    /**
     * @Accessor(getter="getStrength", setter="setStrength")
     * @SerializedName("strength")
     * @Type("integer")
     */
    private $strength;

    /**
     * @Accessor(getter="getAlg", setter="setAlg")
     * @SerializedName("alg")
     * @Type("string")
     */
    private $alg;

    /**
     * @Accessor(getter="getDebianFlaw", setter="setDebianFlaw")
     * @SerializedName("debianFlaw")
     * @Type("boolean")
     */
    private $debianFlaw;

    /**
     * @Accessor(getter="getQ", setter="setQ")
     * @SerializedName("q")
     * @Type("integer")
     */
    private $q;


    /**
     * key size, e.g., 1024 or 2048 for RSA and DSA, or 256 bits for EC.
     */
    public function getSize()
    {
        return $this->size;
    }
    
    public function setSize($size)
    {
        $this->size = $size;
        return $this;
    }

    /**
     * key size expressed in RSA bits.
     */
    public function getStrength()
    {
        return $this->strength;
    }
    
    public function setStrength($strength)
    {
        $this->strength = $strength;
        return $this;
    }

    /**
     * key algorithm; possible values: RSA, DSA, and EC.
     */
    public function getAlg()
    {
        return $this->alg;
    }
    
    public function setAlg($alg)
    {
        $this->alg = $alg;
        return $this;
    }

    /**
     * true if we suspect that the key was generated using a weak random number generator (detected via a blacklist database)
     */
    public function getDebianFlaw()
    {
        return $this->debianFlaw;
    }
    
    public function setDebianFlaw($debianFlaw)
    {
        $this->debianFlaw = $debianFlaw;
        return $this;
    }

    /**
     * 0 if key is insecure, null otherwise
     */
    public function getQ()
    {
        return $this->q;
    }
    
    public function setQ($q)
    {
        $this->q = $q;
        return $this;
    }

}
