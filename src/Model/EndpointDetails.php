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
 * Class EndpointDetails
 *
 * @access public
 * @package Andyftw\SSLLabs\Model
 *
 * @Serializer\AccessType("public_method")
 */
class EndpointDetails
{
    /**
     * [key information](#key).
     *
     * @var Andyftw\SSLLabs\Model\Key
     * @Serializer\Accessor(getter="getKey", setter="setKey")
     * @Serializer\SerializedName("key")
     * @Serializer\Type("Andyftw\SSLLabs\Model\Key")
     */
    private $key;

    /**
     * [certificate information](#cert).
     *
     * @var Andyftw\SSLLabs\Model\Cert
     * @Serializer\Accessor(getter="getCert", setter="setCert")
     * @Serializer\SerializedName("cert")
     * @Serializer\Type("Andyftw\SSLLabs\Model\Cert")
     */
    private $cert;

    /**
     * [chain information](#chain).
     *
     * @var Andyftw\SSLLabs\Model\Chain
     * @Serializer\Accessor(getter="getChain", setter="setChain")
     * @Serializer\SerializedName("chain")
     * @Serializer\Type("Andyftw\SSLLabs\Model\Chain")
     */
    private $chain;

    /**
     * Supported [protocols](#protocol).
     *
     * @var Andyftw\SSLLabs\Model\Protocol[]
     * @Serializer\Accessor(getter="getProtocols", setter="setProtocols")
     * @Serializer\SerializedName("protocols")
     * @Serializer\Type("array<Andyftw\SSLLabs\Model\Protocol>")
     */
    private $protocols;

    /**
     * Supported [cipher suites](#suites).
     *
     * @var Andyftw\SSLLabs\Model\Suites
     * @Serializer\Accessor(getter="getSuites", setter="setSuites")
     * @Serializer\SerializedName("suites")
     * @Serializer\Type("Andyftw\SSLLabs\Model\Suites")
     */
    private $suites;

    /**
     * Contents of the HTTP Server response header when known. This field could be absent for one of two reasons: 1)
     * the HTTP request failed (check httpStatusCode) or 2) there was no Server response header returned.
     *
     * @var string
     * @Serializer\Accessor(getter="getServerSignature", setter="setServerSignature")
     * @Serializer\SerializedName("serverSignature")
     * @Serializer\Type("string")
     */
    private $serverSignature;

    /**
     * True if this endpoint is reachable via a hostname with the www prefix.
     *
     * @var boolean
     * @Serializer\Accessor(getter="getPrefixDelegation", setter="setPrefixDelegation")
     * @Serializer\SerializedName("prefixDelegation")
     * @Serializer\Type("boolean")
     */
    private $prefixDelegation;

    /**
     * True if the endpoint is vulnerable to the BEAST attack.
     *
     * @var boolean
     * @Serializer\Accessor(getter="getVulnBeast", setter="setVulnBeast")
     * @Serializer\SerializedName("vulnBeast")
     * @Serializer\Type("boolean")
     */
    private $vulnBeast;

    /**
     * This is an integer value that describes the endpoint support for renegotiation:.
     *
     * @var integer
     * @Serializer\Accessor(getter="getRenegSupport", setter="setRenegSupport")
     * @Serializer\SerializedName("renegSupport")
     * @Serializer\Type("integer")
     */
    private $renegSupport;

    /**
     * This is an integer value that describes endpoint support for session resumption. The possible values are:.
     *
     * @var integer
     * @Serializer\Accessor(getter="getSessionResumption", setter="setSessionResumption")
     * @Serializer\SerializedName("sessionResumption")
     * @Serializer\Type("integer")
     */
    private $sessionResumption;

    /**
     * Integer value that describes supported compression methods.
     *
     * @var integer
     * @Serializer\Accessor(getter="getCompressionMethods", setter="setCompressionMethods")
     * @Serializer\SerializedName("compressionMethods")
     * @Serializer\Type("integer")
     */
    private $compressionMethods;

    /**
     * True if the server supports NPN.
     *
     * @var boolean
     * @Serializer\Accessor(getter="getSupportsNpn", setter="setSupportsNpn")
     * @Serializer\SerializedName("supportsNpn")
     * @Serializer\Type("boolean")
     */
    private $supportsNpn;

    /**
     * Space separated list of supported protocols.
     *
     * @var string
     * @Serializer\Accessor(getter="getNpnProtocols", setter="setNpnProtocols")
     * @Serializer\SerializedName("npnProtocols")
     * @Serializer\Type("string")
     */
    private $npnProtocols;

    /**
     * Indicates support for Session Tickets.
     *
     * @var integer
     * @Serializer\Accessor(getter="getSessionTickets", setter="setSessionTickets")
     * @Serializer\SerializedName("sessionTickets")
     * @Serializer\Type("integer")
     */
    private $sessionTickets;

    /**
     * True if OCSP stapling is deployed on the server.
     *
     * @var boolean
     * @Serializer\Accessor(getter="getOcspStapling", setter="setOcspStapling")
     * @Serializer\SerializedName("ocspStapling")
     * @Serializer\Type("boolean")
     */
    private $ocspStapling;

    /**
     * Same as Cert.revocationStatus, but for the stapled OCSP response.
     *
     * @var integer
     * @Serializer\Accessor(getter="getStaplingRevocationStatus", setter="setStaplingRevocationStatus")
     * @Serializer\SerializedName("staplingRevocationStatus")
     * @Serializer\Type("integer")
     */
    private $staplingRevocationStatus;

    /**
     * Description of the problem with the stapled OCSP response, if any.
     *
     * @var string
     * @Serializer\Accessor(getter="getStaplingRevocationErrorMessage", setter="setStaplingRevocationErrorMessage")
     * @Serializer\SerializedName("staplingRevocationErrorMessage")
     * @Serializer\Type("string")
     */
    private $staplingRevocationErrorMessage;

    /**
     * If SNI support is required to access the web site.
     *
     * @var boolean
     * @Serializer\Accessor(getter="getSniRequired", setter="setSniRequired")
     * @Serializer\SerializedName("sniRequired")
     * @Serializer\Type("boolean")
     */
    private $sniRequired;

    /**
     * Status code of the final HTTP response seen. When submitting HTTP requests, redirections are followed, but
     * only if they lead to the same hostname. If this field is not available, that means the HTTP request failed.
     *
     * @var integer
     * @Serializer\Accessor(getter="getHttpStatusCode", setter="setHttpStatusCode")
     * @Serializer\SerializedName("httpStatusCode")
     * @Serializer\Type("integer")
     */
    private $httpStatusCode;

    /**
     * Available on a server that responded with a redirection to some other hostname.
     *
     * @var string
     * @Serializer\Accessor(getter="getHttpForwarding", setter="setHttpForwarding")
     * @Serializer\SerializedName("httpForwarding")
     * @Serializer\Type("string")
     */
    private $httpForwarding;

    /**
     * True if the server supports at least one RC4 suite.
     *
     * @var boolean
     * @Serializer\Accessor(getter="getSupportsRc4", setter="setSupportsRc4")
     * @Serializer\SerializedName("supportsRc4")
     * @Serializer\Type("boolean")
     */
    private $supportsRc4;

    /**
     * True if RC4 is used with modern clients.
     *
     * @var boolean
     * @Serializer\Accessor(getter="getRc4WithModern", setter="setRc4WithModern")
     * @Serializer\SerializedName("rc4WithModern")
     * @Serializer\Type("boolean")
     */
    private $rc4WithModern;

    /**
     * True if only RC4 suites are supported.
     *
     * @var boolean
     * @Serializer\Accessor(getter="getRc4Only", setter="setRc4Only")
     * @Serializer\SerializedName("rc4Only")
     * @Serializer\Type("boolean")
     */
    private $rc4Only;

    /**
     * Indicates support for Forward Secrecy.
     *
     * @var integer
     * @Serializer\Accessor(getter="getForwardSecrecy", setter="setForwardSecrecy")
     * @Serializer\SerializedName("forwardSecrecy")
     * @Serializer\Type("integer")
     */
    private $forwardSecrecy;

    /**
     * Instance of [SimDetails](#simdetails).
     *
     * @var Andyftw\SSLLabs\Model\SimDetails
     * @Serializer\Accessor(getter="getSims", setter="setSims")
     * @Serializer\SerializedName("sims")
     * @Serializer\Type("Andyftw\SSLLabs\Model\SimDetails")
     */
    private $sims;

    /**
     * True if the server is vulnerable to the Heartbleed attack.
     *
     * @var boolean
     * @Serializer\Accessor(getter="getHeartbleed", setter="setHeartbleed")
     * @Serializer\SerializedName("heartbleed")
     * @Serializer\Type("boolean")
     */
    private $heartbleed;

    /**
     * True if the server supports the Heartbeat extension.
     *
     * @var boolean
     * @Serializer\Accessor(getter="getHeartbeat", setter="setHeartbeat")
     * @Serializer\SerializedName("heartbeat")
     * @Serializer\Type("boolean")
     */
    private $heartbeat;

    /**
     * Results of the CVE-2014-0224 test:.
     *
     * @var integer
     * @Serializer\Accessor(getter="getOpenSslCcs", setter="setOpenSslCcs")
     * @Serializer\SerializedName("openSslCcs")
     * @Serializer\Type("integer")
     */
    private $openSslCcs;

    /**
     * True if the endpoint is vulnerable to POODLE; false otherwise.
     *
     * @var boolean
     * @Serializer\Accessor(getter="getPoodle", setter="setPoodle")
     * @Serializer\SerializedName("poodle")
     * @Serializer\Type("boolean")
     */
    private $poodle;

    /**
     * Results of the POODLE TLS test:.
     *
     * @var integer
     * @Serializer\Accessor(getter="getPoodleTls", setter="setPoodleTls")
     * @Serializer\SerializedName("poodleTls")
     * @Serializer\Type("integer")
     */
    private $poodleTls;

    /**
     * True if the server supports TLS_FALLBACK_SCSV, false if it doesn't. This field will not be available if the
     * server's support for TLS_FALLBACK_SCSV can't be tested because it supports only one protocol version (e.g.,
     * only TLS 1.2).
     *
     * @var boolean
     * @Serializer\Accessor(getter="getFallbackScsv", setter="setFallbackScsv")
     * @Serializer\SerializedName("fallbackScsv")
     * @Serializer\Type("boolean")
     */
    private $fallbackScsv;

    /**
     * True of the server is vulnerable to the FREAK attack, meaning it supports 512-bit key exchange.
     *
     * @var boolean
     * @Serializer\Accessor(getter="getFreak", setter="setFreak")
     * @Serializer\SerializedName("freak")
     * @Serializer\Type("boolean")
     */
    private $freak;

    /**
     * Information about the availability of certificate transparency information (embedded SCTs):.
     *
     * @var integer
     * @Serializer\Accessor(getter="getHasSct", setter="setHasSct")
     * @Serializer\SerializedName("hasSct")
     * @Serializer\Type("integer")
     */
    private $hasSct;

    /**
     * List of hex-encoded DH primes used by the server. Not present if the server doesn't support the DH key
     * exchange.
     *
     * @var string[]
     * @Serializer\Accessor(getter="getDhPrimes", setter="setDhPrimes")
     * @Serializer\SerializedName("dhPrimes")
     * @Serializer\Type("array<string>")
     */
    private $dhPrimes;

    /**
     * Whether the server uses known DH primes. Not present if the server doesn't support the DH key exchange.
     * Possible values:.
     *
     * @var integer
     * @Serializer\Accessor(getter="getDhUsesKnownPrimes", setter="setDhUsesKnownPrimes")
     * @Serializer\SerializedName("dhUsesKnownPrimes")
     * @Serializer\Type("integer")
     */
    private $dhUsesKnownPrimes;

    /**
     * True if the DH ephemeral server value is reused. Not present if the server doesn't support the DH key
     * exchange.
     *
     * @var boolean
     * @Serializer\Accessor(getter="getDhYsReuse", setter="setDhYsReuse")
     * @Serializer\SerializedName("dhYsReuse")
     * @Serializer\Type("boolean")
     */
    private $dhYsReuse;

    /**
     * True if the server uses DH parameters weaker than 1024 bits.
     *
     * @var boolean
     * @Serializer\Accessor(getter="getLogjam", setter="setLogjam")
     * @Serializer\SerializedName("logjam")
     * @Serializer\Type("boolean")
     */
    private $logjam;

    /**
     * True if the server takes into account client preferences when deciding if to use ChaCha20 suites.
     *
     * @var boolean
     * @Serializer\Accessor(getter="getChaCha20Preference", setter="setChaCha20Preference")
     * @Serializer\SerializedName("chaCha20Preference")
     * @Serializer\Type("boolean")
     */
    private $chaCha20Preference;

    /**
     * Server's HSTS policy. Experimental.
     *
     * @var Andyftw\SSLLabs\Model\HstsPolicy
     * @Serializer\Accessor(getter="getHstsPolicy", setter="setHstsPolicy")
     * @Serializer\SerializedName("hstsPolicy")
     * @Serializer\Type("Andyftw\SSLLabs\Model\HstsPolicy")
     */
    private $hstsPolicy;

    /**
     * Information about preloaded HSTS policies.
     *
     * @var Andyftw\SSLLabs\Model\HstsPreload[]
     * @Serializer\Accessor(getter="getHstsPreloads", setter="setHstsPreloads")
     * @Serializer\SerializedName("hstsPreloads")
     * @Serializer\Type("array<Andyftw\SSLLabs\Model\HstsPreload>")
     */
    private $hstsPreloads;

    /**
     * Server's HPKP policy. Experimental.
     *
     * @var Andyftw\SSLLabs\Model\HpkpPolicy
     * @Serializer\Accessor(getter="getHpkpPolicy", setter="setHpkpPolicy")
     * @Serializer\SerializedName("hpkpPolicy")
     * @Serializer\Type("Andyftw\SSLLabs\Model\HpkpPolicy")
     */
    private $hpkpPolicy;

    /**
     * Server's HPKP RO (Report Only) policy. Experimental.
     *
     * @var Andyftw\SSLLabs\Model\HpkpPolicy
     * @Serializer\Accessor(getter="getHpkpRoPolicy", setter="setHpkpRoPolicy")
     * @Serializer\SerializedName("hpkpRoPolicy")
     * @Serializer\Type("Andyftw\SSLLabs\Model\HpkpPolicy")
     */
    private $hpkpRoPolicy;

    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * [key information](#key).
     *
     * @return Andyftw\SSLLabs\Model\Key
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param $key
     *
     * @return $this
     */
    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * [certificate information](#cert).
     *
     * @return Andyftw\SSLLabs\Model\Cert
     */
    public function getCert()
    {
        return $this->cert;
    }

    /**
     * @param $cert
     *
     * @return $this
     */
    public function setCert($cert)
    {
        $this->cert = $cert;

        return $this;
    }

    /**
     * [chain information](#chain).
     *
     * @return Andyftw\SSLLabs\Model\Chain
     */
    public function getChain()
    {
        return $this->chain;
    }

    /**
     * @param $chain
     *
     * @return $this
     */
    public function setChain($chain)
    {
        $this->chain = $chain;

        return $this;
    }

    /**
     * Supported [protocols](#protocol).
     *
     * @return Andyftw\SSLLabs\Model\Protocol[]
     */
    public function getProtocols()
    {
        return $this->protocols;
    }

    /**
     * @param $protocols
     *
     * @return $this
     */
    public function setProtocols($protocols)
    {
        $this->protocols = $protocols;

        return $this;
    }

    /**
     * Supported [cipher suites](#suites).
     *
     * @return Andyftw\SSLLabs\Model\Suites
     */
    public function getSuites()
    {
        return $this->suites;
    }

    /**
     * @param $suites
     *
     * @return $this
     */
    public function setSuites($suites)
    {
        $this->suites = $suites;

        return $this;
    }

    /**
     * Contents of the HTTP Server response header when known. This field could be absent for one of two reasons: 1)
     * the HTTP request failed (check httpStatusCode) or 2) there was no Server response header returned.
     *
     * @return string
     */
    public function getServerSignature()
    {
        return $this->serverSignature;
    }

    /**
     * @param $serverSignature
     *
     * @return $this
     */
    public function setServerSignature($serverSignature)
    {
        $this->serverSignature = $serverSignature;

        return $this;
    }

    /**
     * True if this endpoint is reachable via a hostname with the www prefix.
     *
     * @return boolean
     */
    public function getPrefixDelegation()
    {
        return $this->prefixDelegation;
    }

    /**
     * @param $prefixDelegation
     *
     * @return $this
     */
    public function setPrefixDelegation($prefixDelegation)
    {
        $this->prefixDelegation = $prefixDelegation;

        return $this;
    }

    /**
     * True if the endpoint is vulnerable to the BEAST attack.
     *
     * @return boolean
     */
    public function getVulnBeast()
    {
        return $this->vulnBeast;
    }

    /**
     * @param $vulnBeast
     *
     * @return $this
     */
    public function setVulnBeast($vulnBeast)
    {
        $this->vulnBeast = $vulnBeast;

        return $this;
    }

    /**
     * This is an integer value that describes the endpoint support for renegotiation:.
     *
     * @return integer
     */
    public function getRenegSupport()
    {
        return $this->renegSupport;
    }

    /**
     * @param $renegSupport
     *
     * @return $this
     */
    public function setRenegSupport($renegSupport)
    {
        $this->renegSupport = $renegSupport;

        return $this;
    }

    /**
     * This is an integer value that describes endpoint support for session resumption. The possible values are:.
     *
     * @return integer
     */
    public function getSessionResumption()
    {
        return $this->sessionResumption;
    }

    /**
     * @param $sessionResumption
     *
     * @return $this
     */
    public function setSessionResumption($sessionResumption)
    {
        $this->sessionResumption = $sessionResumption;

        return $this;
    }

    /**
     * Integer value that describes supported compression methods.
     *
     * @return integer
     */
    public function getCompressionMethods()
    {
        return $this->compressionMethods;
    }

    /**
     * @param $compressionMethods
     *
     * @return $this
     */
    public function setCompressionMethods($compressionMethods)
    {
        $this->compressionMethods = $compressionMethods;

        return $this;
    }

    /**
     * True if the server supports NPN.
     *
     * @return boolean
     */
    public function getSupportsNpn()
    {
        return $this->supportsNpn;
    }

    /**
     * @param $supportsNpn
     *
     * @return $this
     */
    public function setSupportsNpn($supportsNpn)
    {
        $this->supportsNpn = $supportsNpn;

        return $this;
    }

    /**
     * Space separated list of supported protocols.
     *
     * @return string
     */
    public function getNpnProtocols()
    {
        return $this->npnProtocols;
    }

    /**
     * @param $npnProtocols
     *
     * @return $this
     */
    public function setNpnProtocols($npnProtocols)
    {
        $this->npnProtocols = $npnProtocols;

        return $this;
    }

    /**
     * Indicates support for Session Tickets.
     *
     * @return integer
     */
    public function getSessionTickets()
    {
        return $this->sessionTickets;
    }

    /**
     * @param $sessionTickets
     *
     * @return $this
     */
    public function setSessionTickets($sessionTickets)
    {
        $this->sessionTickets = $sessionTickets;

        return $this;
    }

    /**
     * True if OCSP stapling is deployed on the server.
     *
     * @return boolean
     */
    public function getOcspStapling()
    {
        return $this->ocspStapling;
    }

    /**
     * @param $ocspStapling
     *
     * @return $this
     */
    public function setOcspStapling($ocspStapling)
    {
        $this->ocspStapling = $ocspStapling;

        return $this;
    }

    /**
     * Same as Cert.revocationStatus, but for the stapled OCSP response.
     *
     * @return integer
     */
    public function getStaplingRevocationStatus()
    {
        return $this->staplingRevocationStatus;
    }

    /**
     * @param $staplingRevocationStatus
     *
     * @return $this
     */
    public function setStaplingRevocationStatus($staplingRevocationStatus)
    {
        $this->staplingRevocationStatus = $staplingRevocationStatus;

        return $this;
    }

    /**
     * Description of the problem with the stapled OCSP response, if any.
     *
     * @return string
     */
    public function getStaplingRevocationErrorMessage()
    {
        return $this->staplingRevocationErrorMessage;
    }

    /**
     * @param $staplingRevocationErrorMessage
     *
     * @return $this
     */
    public function setStaplingRevocationErrorMessage($staplingRevocationErrorMessage)
    {
        $this->staplingRevocationErrorMessage = $staplingRevocationErrorMessage;

        return $this;
    }

    /**
     * If SNI support is required to access the web site.
     *
     * @return boolean
     */
    public function getSniRequired()
    {
        return $this->sniRequired;
    }

    /**
     * @param $sniRequired
     *
     * @return $this
     */
    public function setSniRequired($sniRequired)
    {
        $this->sniRequired = $sniRequired;

        return $this;
    }

    /**
     * Status code of the final HTTP response seen. When submitting HTTP requests, redirections are followed, but
     * only if they lead to the same hostname. If this field is not available, that means the HTTP request failed.
     *
     * @return integer
     */
    public function getHttpStatusCode()
    {
        return $this->httpStatusCode;
    }

    /**
     * @param $httpStatusCode
     *
     * @return $this
     */
    public function setHttpStatusCode($httpStatusCode)
    {
        $this->httpStatusCode = $httpStatusCode;

        return $this;
    }

    /**
     * Available on a server that responded with a redirection to some other hostname.
     *
     * @return string
     */
    public function getHttpForwarding()
    {
        return $this->httpForwarding;
    }

    /**
     * @param $httpForwarding
     *
     * @return $this
     */
    public function setHttpForwarding($httpForwarding)
    {
        $this->httpForwarding = $httpForwarding;

        return $this;
    }

    /**
     * True if the server supports at least one RC4 suite.
     *
     * @return boolean
     */
    public function getSupportsRc4()
    {
        return $this->supportsRc4;
    }

    /**
     * @param $supportsRc4
     *
     * @return $this
     */
    public function setSupportsRc4($supportsRc4)
    {
        $this->supportsRc4 = $supportsRc4;

        return $this;
    }

    /**
     * True if RC4 is used with modern clients.
     *
     * @return boolean
     */
    public function getRc4WithModern()
    {
        return $this->rc4WithModern;
    }

    /**
     * @param $rc4WithModern
     *
     * @return $this
     */
    public function setRc4WithModern($rc4WithModern)
    {
        $this->rc4WithModern = $rc4WithModern;

        return $this;
    }

    /**
     * True if only RC4 suites are supported.
     *
     * @return boolean
     */
    public function getRc4Only()
    {
        return $this->rc4Only;
    }

    /**
     * @param $rc4Only
     *
     * @return $this
     */
    public function setRc4Only($rc4Only)
    {
        $this->rc4Only = $rc4Only;

        return $this;
    }

    /**
     * Indicates support for Forward Secrecy.
     *
     * @return integer
     */
    public function getForwardSecrecy()
    {
        return $this->forwardSecrecy;
    }

    /**
     * @param $forwardSecrecy
     *
     * @return $this
     */
    public function setForwardSecrecy($forwardSecrecy)
    {
        $this->forwardSecrecy = $forwardSecrecy;

        return $this;
    }

    /**
     * Instance of [SimDetails](#simdetails).
     *
     * @return Andyftw\SSLLabs\Model\SimDetails
     */
    public function getSims()
    {
        return $this->sims;
    }

    /**
     * @param $sims
     *
     * @return $this
     */
    public function setSims($sims)
    {
        $this->sims = $sims;

        return $this;
    }

    /**
     * True if the server is vulnerable to the Heartbleed attack.
     *
     * @return boolean
     */
    public function getHeartbleed()
    {
        return $this->heartbleed;
    }

    /**
     * @param $heartbleed
     *
     * @return $this
     */
    public function setHeartbleed($heartbleed)
    {
        $this->heartbleed = $heartbleed;

        return $this;
    }

    /**
     * True if the server supports the Heartbeat extension.
     *
     * @return boolean
     */
    public function getHeartbeat()
    {
        return $this->heartbeat;
    }

    /**
     * @param $heartbeat
     *
     * @return $this
     */
    public function setHeartbeat($heartbeat)
    {
        $this->heartbeat = $heartbeat;

        return $this;
    }

    /**
     * Results of the CVE-2014-0224 test:.
     *
     * @return integer
     */
    public function getOpenSslCcs()
    {
        return $this->openSslCcs;
    }

    /**
     * @param $openSslCcs
     *
     * @return $this
     */
    public function setOpenSslCcs($openSslCcs)
    {
        $this->openSslCcs = $openSslCcs;

        return $this;
    }

    /**
     * True if the endpoint is vulnerable to POODLE; false otherwise.
     *
     * @return boolean
     */
    public function getPoodle()
    {
        return $this->poodle;
    }

    /**
     * @param $poodle
     *
     * @return $this
     */
    public function setPoodle($poodle)
    {
        $this->poodle = $poodle;

        return $this;
    }

    /**
     * Results of the POODLE TLS test:.
     *
     * @return integer
     */
    public function getPoodleTls()
    {
        return $this->poodleTls;
    }

    /**
     * @param $poodleTls
     *
     * @return $this
     */
    public function setPoodleTls($poodleTls)
    {
        $this->poodleTls = $poodleTls;

        return $this;
    }

    /**
     * True if the server supports TLS_FALLBACK_SCSV, false if it doesn't. This field will not be available if the
     * server's support for TLS_FALLBACK_SCSV can't be tested because it supports only one protocol version (e.g.,
     * only TLS 1.2).
     *
     * @return boolean
     */
    public function getFallbackScsv()
    {
        return $this->fallbackScsv;
    }

    /**
     * @param $fallbackScsv
     *
     * @return $this
     */
    public function setFallbackScsv($fallbackScsv)
    {
        $this->fallbackScsv = $fallbackScsv;

        return $this;
    }

    /**
     * True of the server is vulnerable to the FREAK attack, meaning it supports 512-bit key exchange.
     *
     * @return boolean
     */
    public function getFreak()
    {
        return $this->freak;
    }

    /**
     * @param $freak
     *
     * @return $this
     */
    public function setFreak($freak)
    {
        $this->freak = $freak;

        return $this;
    }

    /**
     * Information about the availability of certificate transparency information (embedded SCTs):.
     *
     * @return integer
     */
    public function getHasSct()
    {
        return $this->hasSct;
    }

    /**
     * @param $hasSct
     *
     * @return $this
     */
    public function setHasSct($hasSct)
    {
        $this->hasSct = $hasSct;

        return $this;
    }

    /**
     * List of hex-encoded DH primes used by the server. Not present if the server doesn't support the DH key
     * exchange.
     *
     * @return string[]
     */
    public function getDhPrimes()
    {
        return $this->dhPrimes;
    }

    /**
     * @param $dhPrimes
     *
     * @return $this
     */
    public function setDhPrimes($dhPrimes)
    {
        $this->dhPrimes = $dhPrimes;

        return $this;
    }

    /**
     * Whether the server uses known DH primes. Not present if the server doesn't support the DH key exchange.
     * Possible values:.
     *
     * @return integer
     */
    public function getDhUsesKnownPrimes()
    {
        return $this->dhUsesKnownPrimes;
    }

    /**
     * @param $dhUsesKnownPrimes
     *
     * @return $this
     */
    public function setDhUsesKnownPrimes($dhUsesKnownPrimes)
    {
        $this->dhUsesKnownPrimes = $dhUsesKnownPrimes;

        return $this;
    }

    /**
     * True if the DH ephemeral server value is reused. Not present if the server doesn't support the DH key
     * exchange.
     *
     * @return boolean
     */
    public function getDhYsReuse()
    {
        return $this->dhYsReuse;
    }

    /**
     * @param $dhYsReuse
     *
     * @return $this
     */
    public function setDhYsReuse($dhYsReuse)
    {
        $this->dhYsReuse = $dhYsReuse;

        return $this;
    }

    /**
     * True if the server uses DH parameters weaker than 1024 bits.
     *
     * @return boolean
     */
    public function getLogjam()
    {
        return $this->logjam;
    }

    /**
     * @param $logjam
     *
     * @return $this
     */
    public function setLogjam($logjam)
    {
        $this->logjam = $logjam;

        return $this;
    }

    /**
     * True if the server takes into account client preferences when deciding if to use ChaCha20 suites.
     *
     * @return boolean
     */
    public function getChaCha20Preference()
    {
        return $this->chaCha20Preference;
    }

    /**
     * @param $chaCha20Preference
     *
     * @return $this
     */
    public function setChaCha20Preference($chaCha20Preference)
    {
        $this->chaCha20Preference = $chaCha20Preference;

        return $this;
    }

    /**
     * Server's HSTS policy. Experimental.
     *
     * @return Andyftw\SSLLabs\Model\HstsPolicy
     */
    public function getHstsPolicy()
    {
        return $this->hstsPolicy;
    }

    /**
     * @param $hstsPolicy
     *
     * @return $this
     */
    public function setHstsPolicy($hstsPolicy)
    {
        $this->hstsPolicy = $hstsPolicy;

        return $this;
    }

    /**
     * Information about preloaded HSTS policies.
     *
     * @return Andyftw\SSLLabs\Model\HstsPreload[]
     */
    public function getHstsPreloads()
    {
        return $this->hstsPreloads;
    }

    /**
     * @param $hstsPreloads
     *
     * @return $this
     */
    public function setHstsPreloads($hstsPreloads)
    {
        $this->hstsPreloads = $hstsPreloads;

        return $this;
    }

    /**
     * Server's HPKP policy. Experimental.
     *
     * @return Andyftw\SSLLabs\Model\HpkpPolicy
     */
    public function getHpkpPolicy()
    {
        return $this->hpkpPolicy;
    }

    /**
     * @param $hpkpPolicy
     *
     * @return $this
     */
    public function setHpkpPolicy($hpkpPolicy)
    {
        $this->hpkpPolicy = $hpkpPolicy;

        return $this;
    }

    /**
     * Server's HPKP RO (Report Only) policy. Experimental.
     *
     * @return Andyftw\SSLLabs\Model\HpkpPolicy
     */
    public function getHpkpRoPolicy()
    {
        return $this->hpkpRoPolicy;
    }

    /**
     * @param $hpkpRoPolicy
     *
     * @return $this
     */
    public function setHpkpRoPolicy($hpkpRoPolicy)
    {
        $this->hpkpRoPolicy = $hpkpRoPolicy;

        return $this;
    }
}
