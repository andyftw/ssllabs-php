<?php

namespace Andyftw\SSLLabs\Model; 

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SerializedName;

class Cert
{
    /**
     * @Accessor(getter="getSubject", setter="setSubject")
     * @SerializedName("subject")
     * @Type("string")
     */
    private $subject;

    /**
     * @Accessor(getter="getCommonNames", setter="setCommonNames")
     * @SerializedName("commonNames")
     * @Type("array<string>")
     */
    private $commonNames;

    /**
     * @Accessor(getter="getAltNames", setter="setAltNames")
     * @SerializedName("altNames")
     * @Type("array<string>")
     */
    private $altNames;

    /**
     * @Accessor(getter="getNotBefore", setter="setNotBefore")
     * @SerializedName("notBefore")
     * @Type("integer")
     */
    private $notBefore;

    /**
     * @Accessor(getter="getNotAfter", setter="setNotAfter")
     * @SerializedName("notAfter")
     * @Type("integer")
     */
    private $notAfter;

    /**
     * @Accessor(getter="getIssuerSubject", setter="setIssuerSubject")
     * @SerializedName("issuerSubject")
     * @Type("string")
     */
    private $issuerSubject;

    /**
     * @Accessor(getter="getSigAlg", setter="setSigAlg")
     * @SerializedName("sigAlg")
     * @Type("string")
     */
    private $sigAlg;

    /**
     * @Accessor(getter="getIssuerLabel", setter="setIssuerLabel")
     * @SerializedName("issuerLabel")
     * @Type("string")
     */
    private $issuerLabel;

    /**
     * @Accessor(getter="getRevocationInfo", setter="setRevocationInfo")
     * @SerializedName("revocationInfo")
     * @Type("integer")
     */
    private $revocationInfo;

    /**
     * @Accessor(getter="getCrlURIs", setter="setCrlURIs")
     * @SerializedName("crlURIs")
     * @Type("array<string>")
     */
    private $crlURIs;

    /**
     * @Accessor(getter="getOcspURIs", setter="setOcspURIs")
     * @SerializedName("ocspURIs")
     * @Type("array<string>")
     */
    private $ocspURIs;

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
     * @Accessor(getter="getSgc", setter="setSgc")
     * @SerializedName("sgc")
     * @Type("integer")
     */
    private $sgc;

    /**
     * @Accessor(getter="getValidationType", setter="setValidationType")
     * @SerializedName("validationType")
     * @Type("string")
     */
    private $validationType;

    /**
     * @Accessor(getter="getIssues", setter="setIssues")
     * @SerializedName("issues")
     * @Type("integer")
     */
    private $issues;

    /**
     * @Accessor(getter="getSct", setter="setSct")
     * @SerializedName("sct")
     * @Type("boolean")
     */
    private $sct;


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
     * common names extracted from the subject
     */
    public function getCommonNames()
    {
        return $this->commonNames;
    }
    
    public function setCommonNames($commonNames)
    {
        $this->commonNames = $commonNames;
        return $this;
    }

    /**
     * alternative names
     */
    public function getAltNames()
    {
        return $this->altNames;
    }
    
    public function setAltNames($altNames)
    {
        $this->altNames = $altNames;
        return $this;
    }

    /**
     * timestamp before which the certificate is not valid
     */
    public function getNotBefore()
    {
        return $this->notBefore;
    }
    
    public function setNotBefore($notBefore)
    {
        $this->notBefore = $notBefore;
        return $this;
    }

    /**
     * timestamp after which the certificate is not valid
     */
    public function getNotAfter()
    {
        return $this->notAfter;
    }
    
    public function setNotAfter($notAfter)
    {
        $this->notAfter = $notAfter;
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
     * certificate signature algorithm
     */
    public function getSigAlg()
    {
        return $this->sigAlg;
    }
    
    public function setSigAlg($sigAlg)
    {
        $this->sigAlg = $sigAlg;
        return $this;
    }

    /**
     * issuer name
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
     * a number that represents revocation information present in the certificate:
     */
    public function getRevocationInfo()
    {
        return $this->revocationInfo;
    }
    
    public function setRevocationInfo($revocationInfo)
    {
        $this->revocationInfo = $revocationInfo;
        return $this;
    }

    /**
     * CRL URIs extracted from the certificate
     */
    public function getCrlURIs()
    {
        return $this->crlURIs;
    }
    
    public function setCrlURIs($crlURIs)
    {
        $this->crlURIs = $crlURIs;
        return $this;
    }

    /**
     * OCSP URIs extracted from the certificate
     */
    public function getOcspURIs()
    {
        return $this->ocspURIs;
    }
    
    public function setOcspURIs($ocspURIs)
    {
        $this->ocspURIs = $ocspURIs;
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
     * Server Gated Cryptography support; integer:
     */
    public function getSgc()
    {
        return $this->sgc;
    }
    
    public function setSgc($sgc)
    {
        $this->sgc = $sgc;
        return $this;
    }

    /**
     * E for Extended Validation certificates; may be null if unable to determine
     */
    public function getValidationType()
    {
        return $this->validationType;
    }
    
    public function setValidationType($validationType)
    {
        $this->validationType = $validationType;
        return $this;
    }

    /**
     * list of certificate issues, one bit per issue:
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
     * true if the certificate contains an embedded SCT; false otherwise.
     */
    public function getSct()
    {
        return $this->sct;
    }
    
    public function setSct($sct)
    {
        $this->sct = $sct;
        return $this;
    }

}
