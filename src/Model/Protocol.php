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
 * Class Protocol
 *
 * @access public
 * @package Andyftw\SSLLabs\Model
 *
 * @Serializer\AccessType("public_method")
 */
class Protocol
{
    /**
     * Protocol version number, e.g. 0x0303 for TLS 1.2.
     *
     * @var integer
     * @Serializer\Accessor(getter="getId", setter="setId")
     * @Serializer\SerializedName("id")
     * @Serializer\Type("integer")
     */
    private $id;

    /**
     * Protocol name, i.e. SSL or TLS.
     *
     * @var string
     * @Serializer\Accessor(getter="getName", setter="setName")
     * @Serializer\SerializedName("name")
     * @Serializer\Type("string")
     */
    private $name;

    /**
     * Protocol version, e.g. 1.2 (for TLS).
     *
     * @var string
     * @Serializer\Accessor(getter="getVersion", setter="setVersion")
     * @Serializer\SerializedName("version")
     * @Serializer\Type("string")
     */
    private $version;

    /**
     * Some servers have SSLv2 protocol enabled, but with all SSLv2 cipher suites disabled. In that case, this field
     * is set to true.
     *
     * @var boolean
     * @Serializer\Accessor(getter="getV2SuitesDisabled", setter="setV2SuitesDisabled")
     * @Serializer\SerializedName("v2SuitesDisabled")
     * @Serializer\Type("boolean")
     */
    private $v2SuitesDisabled;

    /**
     * 0 if the protocol is insecure, null otherwise.
     *
     * @var integer
     * @Serializer\Accessor(getter="getQ", setter="setQ")
     * @Serializer\SerializedName("q")
     * @Serializer\Type("integer")
     */
    private $q;

    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * Protocol version number, e.g. 0x0303 for TLS 1.2.
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Protocol name, i.e. SSL or TLS.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Protocol version, e.g. 1.2 (for TLS).
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param $version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Some servers have SSLv2 protocol enabled, but with all SSLv2 cipher suites disabled. In that case, this field
     * is set to true.
     *
     * @return boolean
     */
    public function getV2SuitesDisabled()
    {
        return $this->v2SuitesDisabled;
    }

    /**
     * @param $v2SuitesDisabled
     *
     * @return $this
     */
    public function setV2SuitesDisabled($v2SuitesDisabled)
    {
        $this->v2SuitesDisabled = $v2SuitesDisabled;

        return $this;
    }

    /**
     * 0 if the protocol is insecure, null otherwise.
     *
     * @return integer
     */
    public function getQ()
    {
        return $this->q;
    }

    /**
     * @param $q
     *
     * @return $this
     */
    public function setQ($q)
    {
        $this->q = $q;

        return $this;
    }
}
