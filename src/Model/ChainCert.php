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
 * Class ChainCert.
 *
 *
 * @Serializer\AccessType("public_method")
 */
class ChainCert
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
     * Certificate label (user-friendly name).
     *
     * @var string
     * @Serializer\Accessor(getter="getLabel", setter="setLabel")
     * @Serializer\SerializedName("label")
     * @Serializer\Type("string")
     */
    private $label;

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
     * Issuer label (user-friendly name).
     *
     * @var string
     * @Serializer\Accessor(getter="getIssuerLabel", setter="setIssuerLabel")
     * @Serializer\SerializedName("issuerLabel")
     * @Serializer\Type("string")
     */
    private $issuerLabel;

    /**
     * A number of flags the describe the problems with this certificate:.
     *
     * @var int
     * @Serializer\Accessor(getter="getIssues", setter="setIssues")
     * @Serializer\SerializedName("issues")
     * @Serializer\Type("integer")
     */
    private $issues;

    /**
     * Key algorithm.
     *
     * @var string
     * @Serializer\Accessor(getter="getKeyAlg", setter="setKeyAlg")
     * @Serializer\SerializedName("keyAlg")
     * @Serializer\Type("string")
     */
    private $keyAlg;

    /**
     * Key size, in bits appropriate for the key algorithm.
     *
     * @var int
     * @Serializer\Accessor(getter="getKeySize", setter="setKeySize")
     * @Serializer\SerializedName("keySize")
     * @Serializer\Type("integer")
     */
    private $keySize;

    /**
     * Key strength, in equivalent RSA bits.
     *
     * @var int
     * @Serializer\Accessor(getter="getKeyStrength", setter="setKeyStrength")
     * @Serializer\SerializedName("keyStrength")
     * @Serializer\Type("integer")
     */
    private $keyStrength;

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
     * PEM-encoded certificate data.
     *
     * @var string
     * @Serializer\Accessor(getter="getRaw", setter="setRaw")
     * @Serializer\SerializedName("raw")
     * @Serializer\Type("string")
     */
    private $raw;

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
     * Certificate label (user-friendly name).
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param $label
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->label = $label;

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
     * Issuer label (user-friendly name).
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
     * A number of flags the describe the problems with this certificate:.
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
     * Key algorithm.
     *
     * @return string
     */
    public function getKeyAlg()
    {
        return $this->keyAlg;
    }

    /**
     * @param $keyAlg
     *
     * @return $this
     */
    public function setKeyAlg($keyAlg)
    {
        $this->keyAlg = $keyAlg;

        return $this;
    }

    /**
     * Key size, in bits appropriate for the key algorithm.
     *
     * @return int
     */
    public function getKeySize()
    {
        return $this->keySize;
    }

    /**
     * @param $keySize
     *
     * @return $this
     */
    public function setKeySize($keySize)
    {
        $this->keySize = $keySize;

        return $this;
    }

    /**
     * Key strength, in equivalent RSA bits.
     *
     * @return int
     */
    public function getKeyStrength()
    {
        return $this->keyStrength;
    }

    /**
     * @param $keyStrength
     *
     * @return $this
     */
    public function setKeyStrength($keyStrength)
    {
        $this->keyStrength = $keyStrength;

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
     * PEM-encoded certificate data.
     *
     * @return string
     */
    public function getRaw()
    {
        return $this->raw;
    }

    /**
     * @param $raw
     *
     * @return $this
     */
    public function setRaw($raw)
    {
        $this->raw = $raw;

        return $this;
    }
}
