<?php

namespace Andyftw\SSLLabs\Model; 

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SerializedName;

class Suite
{
    /**
     * @Accessor(getter="getId", setter="setId")
     * @SerializedName("id")
     * @Type("integer")
     */
    private $id;

    /**
     * @Accessor(getter="getName", setter="setName")
     * @SerializedName("name")
     * @Type("string")
     */
    private $name;

    /**
     * @Accessor(getter="getCipherStrength", setter="setCipherStrength")
     * @SerializedName("cipherStrength")
     * @Type("integer")
     */
    private $cipherStrength;

    /**
     * @Accessor(getter="getDhStrength", setter="setDhStrength")
     * @SerializedName("dhStrength")
     * @Type("integer")
     */
    private $dhStrength;

    /**
     * @Accessor(getter="getDhP", setter="setDhP")
     * @SerializedName("dhP")
     * @Type("integer")
     */
    private $dhP;

    /**
     * @Accessor(getter="getDhG", setter="setDhG")
     * @SerializedName("dhG")
     * @Type("integer")
     */
    private $dhG;

    /**
     * @Accessor(getter="getDhYs", setter="setDhYs")
     * @SerializedName("dhYs")
     * @Type("integer")
     */
    private $dhYs;

    /**
     * @Accessor(getter="getEcdhBits", setter="setEcdhBits")
     * @SerializedName("ecdhBits")
     * @Type("integer")
     */
    private $ecdhBits;

    /**
     * @Accessor(getter="getEcdhStrength", setter="setEcdhStrength")
     * @SerializedName("ecdhStrength")
     * @Type("integer")
     */
    private $ecdhStrength;

    /**
     * @Accessor(getter="getQ", setter="setQ")
     * @SerializedName("q")
     * @Type("integer")
     */
    private $q;


    /**
     * suite RFC ID (e.g., 5)
     */
    public function getId()
    {
        return $this->id;
    }
    
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * suite name (e.g., TLS_RSA_WITH_RC4_128_SHA)
     */
    public function getName()
    {
        return $this->name;
    }
    
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * suite strength (e.g., 128)
     */
    public function getCipherStrength()
    {
        return $this->cipherStrength;
    }
    
    public function setCipherStrength($cipherStrength)
    {
        $this->cipherStrength = $cipherStrength;
        return $this;
    }

    /**
     * strength of DH params (e.g., 1024)
     */
    public function getDhStrength()
    {
        return $this->dhStrength;
    }
    
    public function setDhStrength($dhStrength)
    {
        $this->dhStrength = $dhStrength;
        return $this;
    }

    /**
     * DH params, p component
     */
    public function getDhP()
    {
        return $this->dhP;
    }
    
    public function setDhP($dhP)
    {
        $this->dhP = $dhP;
        return $this;
    }

    /**
     * DH params, g component
     */
    public function getDhG()
    {
        return $this->dhG;
    }
    
    public function setDhG($dhG)
    {
        $this->dhG = $dhG;
        return $this;
    }

    /**
     * DH params, Ys component
     */
    public function getDhYs()
    {
        return $this->dhYs;
    }
    
    public function setDhYs($dhYs)
    {
        $this->dhYs = $dhYs;
        return $this;
    }

    /**
     * ECDH bits
     */
    public function getEcdhBits()
    {
        return $this->ecdhBits;
    }
    
    public function setEcdhBits($ecdhBits)
    {
        $this->ecdhBits = $ecdhBits;
        return $this;
    }

    /**
     * ECDH RSA-equivalent strength
     */
    public function getEcdhStrength()
    {
        return $this->ecdhStrength;
    }
    
    public function setEcdhStrength($ecdhStrength)
    {
        $this->ecdhStrength = $ecdhStrength;
        return $this;
    }

    /**
     * 0 if the suite is insecure, null otherwise
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
