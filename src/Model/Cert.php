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
 * Class Cert.
 *
 *
 * @Serializer\AccessType("public_method")
 */
class Cert
{
    /**
     * Certificate subject.
     *
     * @var string
     * @Serializer\Accessor(getter="getSubject", setter="setSubject")
     * @Serializer\SerializedName("subject")
     * @Serializer\Type("string")
     */
    private $subject;

    /**
     * Common names extracted from the subject.
     *
     * @var string[]
     * @Serializer\Accessor(getter="getCommonNames", setter="setCommonNames")
     * @Serializer\SerializedName("commonNames")
     * @Serializer\Type("array<string>")
     */
    private $commonNames;

    /**
     * Alternative names.
     *
     * @var string[]
     * @Serializer\Accessor(getter="getAltNames", setter="setAltNames")
     * @Serializer\SerializedName("altNames")
     * @Serializer\Type("array<string>")
     */
    private $altNames;

    /**
     * Timestamp before which the certificate is not valid.
     *
     * @var int
     * @Serializer\Accessor(getter="getNotBefore", setter="setNotBefore")
     * @Serializer\SerializedName("notBefore")
     * @Serializer\Type("integer")
     */
    private $notBefore;

    /**
     * Timestamp after which the certificate is not valid.
     *
     * @var int
     * @Serializer\Accessor(getter="getNotAfter", setter="setNotAfter")
     * @Serializer\SerializedName("notAfter")
     * @Serializer\Type("integer")
     */
    private $notAfter;

    /**
     * Issuer subject.
     *
     * @var string
     * @Serializer\Accessor(getter="getIssuerSubject", setter="setIssuerSubject")
     * @Serializer\SerializedName("issuerSubject")
     * @Serializer\Type("string")
     */
    private $issuerSubject;

    /**
     * Certificate signature algorithm.
     *
     * @var string
     * @Serializer\Accessor(getter="getSigAlg", setter="setSigAlg")
     * @Serializer\SerializedName("sigAlg")
     * @Serializer\Type("string")
     */
    private $sigAlg;

    /**
     * Issuer name.
     *
     * @var string
     * @Serializer\Accessor(getter="getIssuerLabel", setter="setIssuerLabel")
     * @Serializer\SerializedName("issuerLabel")
     * @Serializer\Type("string")
     */
    private $issuerLabel;

    /**
     * A number that represents revocation information present in the certificate:.
     *
     * @var int
     * @Serializer\Accessor(getter="getRevocationInfo", setter="setRevocationInfo")
     * @Serializer\SerializedName("revocationInfo")
     * @Serializer\Type("integer")
     */
    private $revocationInfo;

    /**
     * CRL URIs extracted from the certificate.
     *
     * @var string[]
     * @Serializer\Accessor(getter="getCrlURIs", setter="setCrlURIs")
     * @Serializer\SerializedName("crlURIs")
     * @Serializer\Type("array<string>")
     */
    private $crlURIs;

    /**
     * OCSP URIs extracted from the certificate.
     *
     * @var string[]
     * @Serializer\Accessor(getter="getOcspURIs", setter="setOcspURIs")
     * @Serializer\SerializedName("ocspURIs")
     * @Serializer\Type("array<string>")
     */
    private $ocspURIs;

    /**
     * A number that describes the revocation status of the certificate:.
     *
     * @var int
     * @Serializer\Accessor(getter="getRevocationStatus", setter="setRevocationStatus")
     * @Serializer\SerializedName("revocationStatus")
     * @Serializer\Type("integer")
     */
    private $revocationStatus;

    /**
     * Same as revocationStatus, but only for the CRL information (if any).
     *
     * @var int
     * @Serializer\Accessor(getter="getCrlRevocationStatus", setter="setCrlRevocationStatus")
     * @Serializer\SerializedName("crlRevocationStatus")
     * @Serializer\Type("integer")
     */
    private $crlRevocationStatus;

    /**
     * Same as revocationStatus, but only for the OCSP information (if any).
     *
     * @var int
     * @Serializer\Accessor(getter="getOcspRevocationStatus", setter="setOcspRevocationStatus")
     * @Serializer\SerializedName("ocspRevocationStatus")
     * @Serializer\Type("integer")
     */
    private $ocspRevocationStatus;

    /**
     * Server Gated Cryptography support; integer:.
     *
     * @var int
     * @Serializer\Accessor(getter="getSgc", setter="setSgc")
     * @Serializer\SerializedName("sgc")
     * @Serializer\Type("integer")
     */
    private $sgc;

    /**
     * E for Extended Validation certificates; may be null if unable to determine.
     *
     * @var string
     * @Serializer\Accessor(getter="getValidationType", setter="setValidationType")
     * @Serializer\SerializedName("validationType")
     * @Serializer\Type("string")
     */
    private $validationType;

    /**
     * List of certificate issues, one bit per issue:.
     *
     * @var int
     * @Serializer\Accessor(getter="getIssues", setter="setIssues")
     * @Serializer\SerializedName("issues")
     * @Serializer\Type("integer")
     */
    private $issues;

    /**
     * True if the certificate contains an embedded SCT; false otherwise.
     *
     * @var bool
     * @Serializer\Accessor(getter="getSct", setter="setSct")
     * @Serializer\SerializedName("sct")
     * @Serializer\Type("boolean")
     */
    private $sct;

    /**
     * Constructor.
     */
    public function __construct()
    {
    }

    /**
     * Certificate subject.
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param $subject
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Common names extracted from the subject.
     *
     * @return string[]
     */
    public function getCommonNames()
    {
        return $this->commonNames;
    }

    /**
     * @param $commonNames
     *
     * @return $this
     */
    public function setCommonNames($commonNames)
    {
        $this->commonNames = $commonNames;

        return $this;
    }

    /**
     * Alternative names.
     *
     * @return string[]
     */
    public function getAltNames()
    {
        return $this->altNames;
    }

    /**
     * @param $altNames
     *
     * @return $this
     */
    public function setAltNames($altNames)
    {
        $this->altNames = $altNames;

        return $this;
    }

    /**
     * Timestamp before which the certificate is not valid.
     *
     * @return int
     */
    public function getNotBefore()
    {
        return $this->notBefore;
    }

    /**
     * @param $notBefore
     *
     * @return $this
     */
    public function setNotBefore($notBefore)
    {
        $this->notBefore = $notBefore;

        return $this;
    }

    /**
     * Timestamp after which the certificate is not valid.
     *
     * @return int
     */
    public function getNotAfter()
    {
        return $this->notAfter;
    }

    /**
     * @param $notAfter
     *
     * @return $this
     */
    public function setNotAfter($notAfter)
    {
        $this->notAfter = $notAfter;

        return $this;
    }

    /**
     * Issuer subject.
     *
     * @return string
     */
    public function getIssuerSubject()
    {
        return $this->issuerSubject;
    }

    /**
     * @param $issuerSubject
     *
     * @return $this
     */
    public function setIssuerSubject($issuerSubject)
    {
        $this->issuerSubject = $issuerSubject;

        return $this;
    }

    /**
     * Certificate signature algorithm.
     *
     * @return string
     */
    public function getSigAlg()
    {
        return $this->sigAlg;
    }

    /**
     * @param $sigAlg
     *
     * @return $this
     */
    public function setSigAlg($sigAlg)
    {
        $this->sigAlg = $sigAlg;

        return $this;
    }

    /**
     * Issuer name.
     *
     * @return string
     */
    public function getIssuerLabel()
    {
        return $this->issuerLabel;
    }

    /**
     * @param $issuerLabel
     *
     * @return $this
     */
    public function setIssuerLabel($issuerLabel)
    {
        $this->issuerLabel = $issuerLabel;

        return $this;
    }

    /**
     * A number that represents revocation information present in the certificate:.
     *
     * @return int
     */
    public function getRevocationInfo()
    {
        return $this->revocationInfo;
    }

    /**
     * @param $revocationInfo
     *
     * @return $this
     */
    public function setRevocationInfo($revocationInfo)
    {
        $this->revocationInfo = $revocationInfo;

        return $this;
    }

    /**
     * CRL URIs extracted from the certificate.
     *
     * @return string[]
     */
    public function getCrlURIs()
    {
        return $this->crlURIs;
    }

    /**
     * @param $crlURIs
     *
     * @return $this
     */
    public function setCrlURIs($crlURIs)
    {
        $this->crlURIs = $crlURIs;

        return $this;
    }

    /**
     * OCSP URIs extracted from the certificate.
     *
     * @return string[]
     */
    public function getOcspURIs()
    {
        return $this->ocspURIs;
    }

    /**
     * @param $ocspURIs
     *
     * @return $this
     */
    public function setOcspURIs($ocspURIs)
    {
        $this->ocspURIs = $ocspURIs;

        return $this;
    }

    /**
     * A number that describes the revocation status of the certificate:.
     *
     * @return int
     */
    public function getRevocationStatus()
    {
        return $this->revocationStatus;
    }

    /**
     * @param $revocationStatus
     *
     * @return $this
     */
    public function setRevocationStatus($revocationStatus)
    {
        $this->revocationStatus = $revocationStatus;

        return $this;
    }

    /**
     * Same as revocationStatus, but only for the CRL information (if any).
     *
     * @return int
     */
    public function getCrlRevocationStatus()
    {
        return $this->crlRevocationStatus;
    }

    /**
     * @param $crlRevocationStatus
     *
     * @return $this
     */
    public function setCrlRevocationStatus($crlRevocationStatus)
    {
        $this->crlRevocationStatus = $crlRevocationStatus;

        return $this;
    }

    /**
     * Same as revocationStatus, but only for the OCSP information (if any).
     *
     * @return int
     */
    public function getOcspRevocationStatus()
    {
        return $this->ocspRevocationStatus;
    }

    /**
     * @param $ocspRevocationStatus
     *
     * @return $this
     */
    public function setOcspRevocationStatus($ocspRevocationStatus)
    {
        $this->ocspRevocationStatus = $ocspRevocationStatus;

        return $this;
    }

    /**
     * Server Gated Cryptography support; integer:.
     *
     * @return int
     */
    public function getSgc()
    {
        return $this->sgc;
    }

    /**
     * @param $sgc
     *
     * @return $this
     */
    public function setSgc($sgc)
    {
        $this->sgc = $sgc;

        return $this;
    }

    /**
     * E for Extended Validation certificates; may be null if unable to determine.
     *
     * @return string
     */
    public function getValidationType()
    {
        return $this->validationType;
    }

    /**
     * @param $validationType
     *
     * @return $this
     */
    public function setValidationType($validationType)
    {
        $this->validationType = $validationType;

        return $this;
    }

    /**
     * List of certificate issues, one bit per issue:.
     *
     * @return int
     */
    public function getIssues()
    {
        return $this->issues;
    }

    /**
     * @param $issues
     *
     * @return $this
     */
    public function setIssues($issues)
    {
        $this->issues = $issues;

        return $this;
    }

    /**
     * True if the certificate contains an embedded SCT; false otherwise.
     *
     * @return bool
     */
    public function getSct()
    {
        return $this->sct;
    }

    /**
     * @param $sct
     *
     * @return $this
     */
    public function setSct($sct)
    {
        $this->sct = $sct;

        return $this;
    }
}
