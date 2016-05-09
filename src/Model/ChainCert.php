<?php

namespace Andyftw\SSLLabs\Model; 

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SerializedName;

class ChainCert
{
    /**
     * @Accessor(getter="getSubject", setter="setSubject")
     * @SerializedName("subject")
     * @Type("string")
     */
    private $subject;

    /**
     * @Accessor(getter="getLabel", setter="setLabel")
     * @SerializedName("label")
     * @Type("string")
     */
    private $label;

    /**
     * @Accessor(getter="getIssuerSubject", setter="setIssuerSubject")
     * @SerializedName("issuerSubject")
     * @Type("string")
     */
    private $issuerSubject;

    /**
     * @Accessor(getter="getIssuerLabel", setter="setIssuerLabel")
     * @SerializedName("issuerLabel")
     * @Type("string")
     */
    private $issuerLabel;

    /**
     * @Accessor(getter="getIssues", setter="setIssues")
     * @SerializedName("issues")
     * @Type("integer")
     */
    private $issues;

    /**
     * @Accessor(getter="getKeyAlg", setter="setKeyAlg")
     * @SerializedName("keyAlg")
     * @Type("string")
     */
    private $keyAlg;

    /**
     * @Accessor(getter="getKeySize", setter="setKeySize")
     * @SerializedName("keySize")
     * @Type("integer")
     */
    private $keySize;

    /**
     * @Accessor(getter="getKeyStrength", setter="setKeyStrength")
     * @SerializedName("keyStrength")
     * @Type("integer")
     */
    private $keyStrength;

    /**
     * @Accessor(getter="getRevocationStatus", setter="setRevocationStatus")
     * @SerializedName("revocationStatus")
     * @Type("integer")
     */
    private $revocationStatus;

    /**
     * @Accessor(getter="getCrlRevocationStatus", setter="setCrlRevocationStatus")
     * @SerializedName("crlRevocationStatus")
     * @Type("integer")
     */
    private $crlRevocationStatus;

    /**
     * @Accessor(getter="getOcspRevocationStatus", setter="setOcspRevocationStatus")
     * @SerializedName("ocspRevocationStatus")
     * @Type("integer")
     */
    private $ocspRevocationStatus;

    /**
     * @Accessor(getter="getRaw", setter="setRaw")
     * @SerializedName("raw")
     * @Type("string")
     */
    private $raw;


    /**
     * certificate subject
     */
    public function getSubject()
    {
        return $this->subject;
    }
    
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * certificate label (user-friendly name)
     */
    public function getLabel()
    {
        return $this->label;
    }
    
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * issuer subject
     */
    public function getIssuerSubject()
    {
        return $this->issuerSubject;
    }
    
    public function setIssuerSubject($issuerSubject)
    {
        $this->issuerSubject = $issuerSubject;
        return $this;
    }

    /**
     * issuer label (user-friendly name)
     */
    public function getIssuerLabel()
    {
        return $this->issuerLabel;
    }
    
    public function setIssuerLabel($issuerLabel)
    {
        $this->issuerLabel = $issuerLabel;
        return $this;
    }

    /**
     * a number of flags the describe the problems with this certificate:
     */
    public function getIssues()
    {
        return $this->issues;
    }
    
    public function setIssues($issues)
    {
        $this->issues = $issues;
        return $this;
    }

    /**
     * key algorithm.
     */
    public function getKeyAlg()
    {
        return $this->keyAlg;
    }
    
    public function setKeyAlg($keyAlg)
    {
        $this->keyAlg = $keyAlg;
        return $this;
    }

    /**
     * key size, in bits appropriate for the key algorithm.
     */
    public function getKeySize()
    {
        return $this->keySize;
    }
    
    public function setKeySize($keySize)
    {
        $this->keySize = $keySize;
        return $this;
    }

    /**
     * key strength, in equivalent RSA bits.
     */
    public function getKeyStrength()
    {
        return $this->keyStrength;
    }
    
    public function setKeyStrength($keyStrength)
    {
        $this->keyStrength = $keyStrength;
        return $this;
    }

    /**
     * a number that describes the revocation status of the certificate:
     */
    public function getRevocationStatus()
    {
        return $this->revocationStatus;
    }
    
    public function setRevocationStatus($revocationStatus)
    {
        $this->revocationStatus = $revocationStatus;
        return $this;
    }

    /**
     * same as revocationStatus, but only for the CRL information (if any).
     */
    public function getCrlRevocationStatus()
    {
        return $this->crlRevocationStatus;
    }
    
    public function setCrlRevocationStatus($crlRevocationStatus)
    {
        $this->crlRevocationStatus = $crlRevocationStatus;
        return $this;
    }

    /**
     * same as revocationStatus, but only for the OCSP information (if any).
     */
    public function getOcspRevocationStatus()
    {
        return $this->ocspRevocationStatus;
    }
    
    public function setOcspRevocationStatus($ocspRevocationStatus)
    {
        $this->ocspRevocationStatus = $ocspRevocationStatus;
        return $this;
    }

    /**
     * PEM-encoded certificate data
     */
    public function getRaw()
    {
        return $this->raw;
    }
    
    public function setRaw($raw)
    {
        $this->raw = $raw;
        return $this;
    }

}
