<?php

namespace Andyftw\SSLLabs\Model;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SerializedName;

class EndpointDetails
{
    /**
     * @Accessor(getter="getKey", setter="setKey")
     * @SerializedName("key")
     * @Type("Andyftw\SSLLabs\Model\Key")
     */
    private $key;

    /**
     * @Accessor(getter="getCert", setter="setCert")
     * @SerializedName("cert")
     * @Type("Andyftw\SSLLabs\Model\Cert")
     */
    private $cert;

    /**
     * @Accessor(getter="getChain", setter="setChain")
     * @SerializedName("chain")
     * @Type("Andyftw\SSLLabs\Model\Chain")
     */
    private $chain;

    /**
     * @Accessor(getter="getProtocols", setter="setProtocols")
     * @SerializedName("protocols")
     * @Type("array<Andyftw\SSLLabs\Model\Protocol>")
     */
    private $protocols;

    /**
     * @Accessor(getter="getSuites", setter="setSuites")
     * @SerializedName("suites")
     * @Type("Andyftw\SSLLabs\Model\Suites")
     */
    private $suites;

    /**
     * @Accessor(getter="getServerSignature", setter="setServerSignature")
     * @SerializedName("serverSignature")
     * @Type("string")
     */
    private $serverSignature;

    /**
     * @Accessor(getter="getPrefixDelegation", setter="setPrefixDelegation")
     * @SerializedName("prefixDelegation")
     * @Type("boolean")
     */
    private $prefixDelegation;

    /**
     * @Accessor(getter="getVulnBeast", setter="setVulnBeast")
     * @SerializedName("vulnBeast")
     * @Type("boolean")
     */
    private $vulnBeast;

    /**
     * @Accessor(getter="getRenegSupport", setter="setRenegSupport")
     * @SerializedName("renegSupport")
     * @Type("integer")
     */
    private $renegSupport;

    /**
     * @Accessor(getter="getSessionResumption", setter="setSessionResumption")
     * @SerializedName("sessionResumption")
     * @Type("integer")
     */
    private $sessionResumption;

    /**
     * @Accessor(getter="getCompressionMethods", setter="setCompressionMethods")
     * @SerializedName("compressionMethods")
     * @Type("integer")
     */
    private $compressionMethods;

    /**
     * @Accessor(getter="getSupportsNpn", setter="setSupportsNpn")
     * @SerializedName("supportsNpn")
     * @Type("boolean")
     */
    private $supportsNpn;

    /**
     * @Accessor(getter="getNpnProtocols", setter="setNpnProtocols")
     * @SerializedName("npnProtocols")
     * @Type("string")
     */
    private $npnProtocols;

    /**
     * @Accessor(getter="getSessionTickets", setter="setSessionTickets")
     * @SerializedName("sessionTickets")
     * @Type("integer")
     */
    private $sessionTickets;

    /**
     * @Accessor(getter="getOcspStapling", setter="setOcspStapling")
     * @SerializedName("ocspStapling")
     * @Type("boolean")
     */
    private $ocspStapling;

    /**
     * @Accessor(getter="getStaplingRevocationStatus", setter="setStaplingRevocationStatus")
     * @SerializedName("staplingRevocationStatus")
     * @Type("integer")
     */
    private $staplingRevocationStatus;

    /**
     * @Accessor(getter="getStaplingRevocationErrorMessage", setter="setStaplingRevocationErrorMessage")
     * @SerializedName("staplingRevocationErrorMessage")
     * @Type("string")
     */
    private $staplingRevocationErrorMessage;

    /**
     * @Accessor(getter="getSniRequired", setter="setSniRequired")
     * @SerializedName("sniRequired")
     * @Type("boolean")
     */
    private $sniRequired;

    /**
     * @Accessor(getter="getHttpStatusCode", setter="setHttpStatusCode")
     * @SerializedName("httpStatusCode")
     * @Type("integer")
     */
    private $httpStatusCode;

    /**
     * @Accessor(getter="getHttpForwarding", setter="setHttpForwarding")
     * @SerializedName("httpForwarding")
     * @Type("string")
     */
    private $httpForwarding;

    /**
     * @Accessor(getter="getSupportsRc4", setter="setSupportsRc4")
     * @SerializedName("supportsRc4")
     * @Type("boolean")
     */
    private $supportsRc4;

    /**
     * @Accessor(getter="getRc4WithModern", setter="setRc4WithModern")
     * @SerializedName("rc4WithModern")
     * @Type("boolean")
     */
    private $rc4WithModern;

    /**
     * @Accessor(getter="getRc4Only", setter="setRc4Only")
     * @SerializedName("rc4Only")
     * @Type("boolean")
     */
    private $rc4Only;

    /**
     * @Accessor(getter="getForwardSecrecy", setter="setForwardSecrecy")
     * @SerializedName("forwardSecrecy")
     * @Type("integer")
     */
    private $forwardSecrecy;

    /**
     * @Accessor(getter="getSims", setter="setSims")
     * @SerializedName("sims")
     * @Type("Andyftw\SSLLabs\Model\SimDetails")
     */
    private $sims;

    /**
     * @Accessor(getter="getHeartbleed", setter="setHeartbleed")
     * @SerializedName("heartbleed")
     * @Type("boolean")
     */
    private $heartbleed;

    /**
     * @Accessor(getter="getHeartbeat", setter="setHeartbeat")
     * @SerializedName("heartbeat")
     * @Type("boolean")
     */
    private $heartbeat;

    /**
     * @Accessor(getter="getOpenSslCcs", setter="setOpenSslCcs")
     * @SerializedName("openSslCcs")
     * @Type("integer")
     */
    private $openSslCcs;

    /**
     * @Accessor(getter="getPoodle", setter="setPoodle")
     * @SerializedName("poodle")
     * @Type("boolean")
     */
    private $poodle;

    /**
     * @Accessor(getter="getPoodleTls", setter="setPoodleTls")
     * @SerializedName("poodleTls")
     * @Type("integer")
     */
    private $poodleTls;

    /**
     * @Accessor(getter="getFallbackScsv", setter="setFallbackScsv")
     * @SerializedName("fallbackScsv")
     * @Type("boolean")
     */
    private $fallbackScsv;

    /**
     * @Accessor(getter="getFreak", setter="setFreak")
     * @SerializedName("freak")
     * @Type("boolean")
     */
    private $freak;

    /**
     * @Accessor(getter="getHasSct", setter="setHasSct")
     * @SerializedName("hasSct")
     * @Type("integer")
     */
    private $hasSct;

    /**
     * @Accessor(getter="getDhPrimes", setter="setDhPrimes")
     * @SerializedName("dhPrimes")
     * @Type("array<string>")
     */
    private $dhPrimes;

    /**
     * @Accessor(getter="getDhUsesKnownPrimes", setter="setDhUsesKnownPrimes")
     * @SerializedName("dhUsesKnownPrimes")
     * @Type("integer")
     */
    private $dhUsesKnownPrimes;

    /**
     * @Accessor(getter="getDhYsReuse", setter="setDhYsReuse")
     * @SerializedName("dhYsReuse")
     * @Type("boolean")
     */
    private $dhYsReuse;

    /**
     * @Accessor(getter="getLogjam", setter="setLogjam")
     * @SerializedName("logjam")
     * @Type("boolean")
     */
    private $logjam;

    /**
     * @Accessor(getter="getChaCha20Preference", setter="setChaCha20Preference")
     * @SerializedName("chaCha20Preference")
     * @Type("boolean")
     */
    private $chaCha20Preference;

    /**
     * @Accessor(getter="getHstsPolicy", setter="setHstsPolicy")
     * @SerializedName("hstsPolicy")
     * @Type("Andyftw\SSLLabs\Model\HstsPolicy")
     */
    private $hstsPolicy;

    /**
     * @Accessor(getter="getHstsPreloads", setter="setHstsPreloads")
     * @SerializedName("hstsPreloads")
     * @Type("array<Andyftw\SSLLabs\Model\HstsPreload>")
     */
    private $hstsPreloads;

    /**
     * @Accessor(getter="getHpkpPolicy", setter="setHpkpPolicy")
     * @SerializedName("hpkpPolicy")
     * @Type("Andyftw\SSLLabs\Model\HpkpPolicy")
     */
    private $hpkpPolicy;

    /**
     * @Accessor(getter="getHpkpRoPolicy", setter="setHpkpRoPolicy")
     * @SerializedName("hpkpRoPolicy")
     * @Type("Andyftw\SSLLabs\Model\HpkpPolicy")
     */
    private $hpkpRoPolicy;
    /**
     * [key information](#key).
     */
    public function getKey()
    {
        return $this->key;
    }

    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * [certificate information](#cert).
     */
    public function getCert()
    {
        return $this->cert;
    }

    public function setCert($cert)
    {
        $this->cert = $cert;

        return $this;
    }

    /**
     * [chain information](#chain).
     */
    public function getChain()
    {
        return $this->chain;
    }

    public function setChain($chain)
    {
        $this->chain = $chain;

        return $this;
    }

    /**
     * supported [protocols](#protocol).
     */
    public function getProtocols()
    {
        return $this->protocols;
    }

    public function setProtocols($protocols)
    {
        $this->protocols = $protocols;

        return $this;
    }

    /**
     * supported [cipher suites](#suites).
     */
    public function getSuites()
    {
        return $this->suites;
    }

    public function setSuites($suites)
    {
        $this->suites = $suites;

        return $this;
    }

    /**
     * Contents of the HTTP Server response header when known. This field could be absent for one of two reasons: 1) the HTTP request failed (check
     * httpStatusCode) or 2) there was no Server response header returned.
     */
    public function getServerSignature()
    {
        return $this->serverSignature;
    }

    public function setServerSignature($serverSignature)
    {
        $this->serverSignature = $serverSignature;

        return $this;
    }

    /**
     * true if this endpoint is reachable via a hostname with the www prefix.
     */
    public function getPrefixDelegation()
    {
        return $this->prefixDelegation;
    }

    public function setPrefixDelegation($prefixDelegation)
    {
        $this->prefixDelegation = $prefixDelegation;

        return $this;
    }

    /**
     * true if the endpoint is vulnerable to the BEAST attack.
     */
    public function getVulnBeast()
    {
        return $this->vulnBeast;
    }

    public function setVulnBeast($vulnBeast)
    {
        $this->vulnBeast = $vulnBeast;

        return $this;
    }

    /**
     * this is an integer value that describes the endpoint support for renegotiation:.
     */
    public function getRenegSupport()
    {
        return $this->renegSupport;
    }

    public function setRenegSupport($renegSupport)
    {
        $this->renegSupport = $renegSupport;

        return $this;
    }

    /**
     * this is an integer value that describes endpoint support for session resumption. The possible values are:.
     */
    public function getSessionResumption()
    {
        return $this->sessionResumption;
    }

    public function setSessionResumption($sessionResumption)
    {
        $this->sessionResumption = $sessionResumption;

        return $this;
    }

    /**
     * integer value that describes supported compression methods.
     */
    public function getCompressionMethods()
    {
        return $this->compressionMethods;
    }

    public function setCompressionMethods($compressionMethods)
    {
        $this->compressionMethods = $compressionMethods;

        return $this;
    }

    /**
     * true if the server supports NPN.
     */
    public function getSupportsNpn()
    {
        return $this->supportsNpn;
    }

    public function setSupportsNpn($supportsNpn)
    {
        $this->supportsNpn = $supportsNpn;

        return $this;
    }

    /**
     * space separated list of supported protocols.
     */
    public function getNpnProtocols()
    {
        return $this->npnProtocols;
    }

    public function setNpnProtocols($npnProtocols)
    {
        $this->npnProtocols = $npnProtocols;

        return $this;
    }

    /**
     * indicates support for Session Tickets.
     */
    public function getSessionTickets()
    {
        return $this->sessionTickets;
    }

    public function setSessionTickets($sessionTickets)
    {
        $this->sessionTickets = $sessionTickets;

        return $this;
    }

    /**
     * true if OCSP stapling is deployed on the server.
     */
    public function getOcspStapling()
    {
        return $this->ocspStapling;
    }

    public function setOcspStapling($ocspStapling)
    {
        $this->ocspStapling = $ocspStapling;

        return $this;
    }

    /**
     * same as Cert.revocationStatus, but for the stapled OCSP response.
     */
    public function getStaplingRevocationStatus()
    {
        return $this->staplingRevocationStatus;
    }

    public function setStaplingRevocationStatus($staplingRevocationStatus)
    {
        $this->staplingRevocationStatus = $staplingRevocationStatus;

        return $this;
    }

    /**
     * description of the problem with the stapled OCSP response, if any.
     */
    public function getStaplingRevocationErrorMessage()
    {
        return $this->staplingRevocationErrorMessage;
    }

    public function setStaplingRevocationErrorMessage($staplingRevocationErrorMessage)
    {
        $this->staplingRevocationErrorMessage = $staplingRevocationErrorMessage;

        return $this;
    }

    /**
     * if SNI support is required to access the web site.
     */
    public function getSniRequired()
    {
        return $this->sniRequired;
    }

    public function setSniRequired($sniRequired)
    {
        $this->sniRequired = $sniRequired;

        return $this;
    }

    /**
     * status code of the final HTTP response seen. When submitting HTTP requests, redirections are followed, but only if they lead to the same
     * hostname. If this field is not available, that means the HTTP request failed.
     */
    public function getHttpStatusCode()
    {
        return $this->httpStatusCode;
    }

    public function setHttpStatusCode($httpStatusCode)
    {
        $this->httpStatusCode = $httpStatusCode;

        return $this;
    }

    /**
     * available on a server that responded with a redirection to some other hostname.
     */
    public function getHttpForwarding()
    {
        return $this->httpForwarding;
    }

    public function setHttpForwarding($httpForwarding)
    {
        $this->httpForwarding = $httpForwarding;

        return $this;
    }

    /**
     * true if the server supports at least one RC4 suite.
     */
    public function getSupportsRc4()
    {
        return $this->supportsRc4;
    }

    public function setSupportsRc4($supportsRc4)
    {
        $this->supportsRc4 = $supportsRc4;

        return $this;
    }

    /**
     * true if RC4 is used with modern clients.
     */
    public function getRc4WithModern()
    {
        return $this->rc4WithModern;
    }

    public function setRc4WithModern($rc4WithModern)
    {
        $this->rc4WithModern = $rc4WithModern;

        return $this;
    }

    /**
     * true if only RC4 suites are supported.
     */
    public function getRc4Only()
    {
        return $this->rc4Only;
    }

    public function setRc4Only($rc4Only)
    {
        $this->rc4Only = $rc4Only;

        return $this;
    }

    /**
     * indicates support for Forward Secrecy.
     */
    public function getForwardSecrecy()
    {
        return $this->forwardSecrecy;
    }

    public function setForwardSecrecy($forwardSecrecy)
    {
        $this->forwardSecrecy = $forwardSecrecy;

        return $this;
    }

    /**
     * instance of [SimDetails](#simdetails).
     */
    public function getSims()
    {
        return $this->sims;
    }

    public function setSims($sims)
    {
        $this->sims = $sims;

        return $this;
    }

    /**
     * true if the server is vulnerable to the Heartbleed attack.
     */
    public function getHeartbleed()
    {
        return $this->heartbleed;
    }

    public function setHeartbleed($heartbleed)
    {
        $this->heartbleed = $heartbleed;

        return $this;
    }

    /**
     * true if the server supports the Heartbeat extension.
     */
    public function getHeartbeat()
    {
        return $this->heartbeat;
    }

    public function setHeartbeat($heartbeat)
    {
        $this->heartbeat = $heartbeat;

        return $this;
    }

    /**
     * results of the CVE-2014-0224 test:.
     */
    public function getOpenSslCcs()
    {
        return $this->openSslCcs;
    }

    public function setOpenSslCcs($openSslCcs)
    {
        $this->openSslCcs = $openSslCcs;

        return $this;
    }

    /**
     * true if the endpoint is vulnerable to POODLE; false otherwise.
     */
    public function getPoodle()
    {
        return $this->poodle;
    }

    public function setPoodle($poodle)
    {
        $this->poodle = $poodle;

        return $this;
    }

    /**
     * results of the POODLE TLS test:.
     */
    public function getPoodleTls()
    {
        return $this->poodleTls;
    }

    public function setPoodleTls($poodleTls)
    {
        $this->poodleTls = $poodleTls;

        return $this;
    }

    /**
     * true if the server supports TLS_FALLBACK_SCSV, false if it doesn't. This field will not be available if the server's support for
     * TLS_FALLBACK_SCSV can't be tested because it supports only one protocol version (e.g., only TLS 1.2).
     */
    public function getFallbackScsv()
    {
        return $this->fallbackScsv;
    }

    public function setFallbackScsv($fallbackScsv)
    {
        $this->fallbackScsv = $fallbackScsv;

        return $this;
    }

    /**
     * true of the server is vulnerable to the FREAK attack, meaning it supports 512-bit key exchange.
     */
    public function getFreak()
    {
        return $this->freak;
    }

    public function setFreak($freak)
    {
        $this->freak = $freak;

        return $this;
    }

    /**
     * information about the availability of certificate transparency information (embedded SCTs):.
     */
    public function getHasSct()
    {
        return $this->hasSct;
    }

    public function setHasSct($hasSct)
    {
        $this->hasSct = $hasSct;

        return $this;
    }

    /**
     * list of hex-encoded DH primes used by the server. Not present if the server doesn't support the DH key exchange.
     */
    public function getDhPrimes()
    {
        return $this->dhPrimes;
    }

    public function setDhPrimes($dhPrimes)
    {
        $this->dhPrimes = $dhPrimes;

        return $this;
    }

    /**
     * whether the server uses known DH primes. Not present if the server doesn't support the DH key exchange. Possible values:.
     */
    public function getDhUsesKnownPrimes()
    {
        return $this->dhUsesKnownPrimes;
    }

    public function setDhUsesKnownPrimes($dhUsesKnownPrimes)
    {
        $this->dhUsesKnownPrimes = $dhUsesKnownPrimes;

        return $this;
    }

    /**
     * true if the DH ephemeral server value is reused. Not present if the server doesn't support the DH key exchange.
     */
    public function getDhYsReuse()
    {
        return $this->dhYsReuse;
    }

    public function setDhYsReuse($dhYsReuse)
    {
        $this->dhYsReuse = $dhYsReuse;

        return $this;
    }

    /**
     * true if the server uses DH parameters weaker than 1024 bits.
     */
    public function getLogjam()
    {
        return $this->logjam;
    }

    public function setLogjam($logjam)
    {
        $this->logjam = $logjam;

        return $this;
    }

    /**
     * true if the server takes into account client preferences when deciding if to use ChaCha20 suites.
     */
    public function getChaCha20Preference()
    {
        return $this->chaCha20Preference;
    }

    public function setChaCha20Preference($chaCha20Preference)
    {
        $this->chaCha20Preference = $chaCha20Preference;

        return $this;
    }

    /**
     * server's HSTS policy. Experimental.
     */
    public function getHstsPolicy()
    {
        return $this->hstsPolicy;
    }

    public function setHstsPolicy($hstsPolicy)
    {
        $this->hstsPolicy = $hstsPolicy;

        return $this;
    }

    /**
     * information about preloaded HSTS policies.
     */
    public function getHstsPreloads()
    {
        return $this->hstsPreloads;
    }

    public function setHstsPreloads($hstsPreloads)
    {
        $this->hstsPreloads = $hstsPreloads;

        return $this;
    }

    /**
     * server's HPKP policy. Experimental.
     */
    public function getHpkpPolicy()
    {
        return $this->hpkpPolicy;
    }

    public function setHpkpPolicy($hpkpPolicy)
    {
        $this->hpkpPolicy = $hpkpPolicy;

        return $this;
    }

    /**
     * server's HPKP RO (Report Only) policy. Experimental.
     */
    public function getHpkpRoPolicy()
    {
        return $this->hpkpRoPolicy;
    }

    public function setHpkpRoPolicy($hpkpRoPolicy)
    {
        $this->hpkpRoPolicy = $hpkpRoPolicy;

        return $this;
    }
}
