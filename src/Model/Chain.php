<?php

namespace Andyftw\SSLLabs\Model;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SerializedName;

class Chain
{
    /**
     * @Accessor(getter="getCerts", setter="setCerts")
     * @SerializedName("certs")
     * @Type("array<Andyftw\SSLLabs\Model\ChainCert>")
     */
    private $certs;

    /**
     * @Accessor(getter="getIssues", setter="setIssues")
     * @SerializedName("issues")
     * @Type("integer")
     */
    private $issues;
    /**
     * a list of [ChainCert objects](#chaincert), representing the chain certificates in the order in which they were retrieved from the server.
     */
    public function getCerts()
    {
        return $this->certs;
    }

    public function setCerts($certs)
    {
        $this->certs = $certs;

        return $this;
    }

    /**
     * a number of flags that describe the chain and the problems it has:.
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
}
