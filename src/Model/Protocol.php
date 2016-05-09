<?php

namespace Andyftw\SSLLabs\Model;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SerializedName;

class Protocol
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
     * @Accessor(getter="getVersion", setter="setVersion")
     * @SerializedName("version")
     * @Type("string")
     */
    private $version;

    /**
     * @Accessor(getter="getV2SuitesDisabled", setter="setV2SuitesDisabled")
     * @SerializedName("v2SuitesDisabled")
     * @Type("boolean")
     */
    private $v2SuitesDisabled;

    /**
     * @Accessor(getter="getQ", setter="setQ")
     * @SerializedName("q")
     * @Type("integer")
     */
    private $q;
    /**
     * protocol version number, e.g. 0x0303 for TLS 1.2.
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
     * protocol name, i.e. SSL or TLS.
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
     * protocol version, e.g. 1.2 (for TLS).
     */
    public function getVersion()
    {
        return $this->version;
    }

    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * some servers have SSLv2 protocol enabled, but with all SSLv2 cipher suites disabled. In that case, this field is set to true.
     */
    public function getV2SuitesDisabled()
    {
        return $this->v2SuitesDisabled;
    }

    public function setV2SuitesDisabled($v2SuitesDisabled)
    {
        $this->v2SuitesDisabled = $v2SuitesDisabled;

        return $this;
    }

    /**
     * 0 if the protocol is insecure, null otherwise.
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
