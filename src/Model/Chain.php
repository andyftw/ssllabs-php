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
 * Class Chain
 *
 * @access public
 * @package Andyftw\SSLLabs\Model
 *
 * @Serializer\AccessType("public_method")
 */
class Chain
{
    /**
     * A list of [ChainCert objects](#chaincert), representing the chain certificates in the order in which they were
     * retrieved from the server.
     *
     * @var Andyftw\SSLLabs\Model\ChainCert[]
     * @Serializer\Accessor(getter="getCerts", setter="setCerts")
     * @Serializer\SerializedName("certs")
     * @Serializer\Type("array<Andyftw\SSLLabs\Model\ChainCert>")
     */
    private $certs;

    /**
     * A number of flags that describe the chain and the problems it has:.
     *
     * @var integer
     * @Serializer\Accessor(getter="getIssues", setter="setIssues")
     * @Serializer\SerializedName("issues")
     * @Serializer\Type("integer")
     */
    private $issues;

    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * A list of [ChainCert objects](#chaincert), representing the chain certificates in the order in which they were
     * retrieved from the server.
     *
     * @return Andyftw\SSLLabs\Model\ChainCert[]
     */
    public function getCerts()
    {
        return $this->certs;
    }

    /**
     * @param $certs
     *
     * @return $this
     */
    public function setCerts($certs)
    {
        $this->certs = $certs;

        return $this;
    }

    /**
     * A number of flags that describe the chain and the problems it has:.
     *
     * @return integer
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
}
