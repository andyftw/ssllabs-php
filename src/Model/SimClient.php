<?php

namespace Andyftw\SSLLabs\Model; 

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SerializedName;

class SimClient
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
     * @Accessor(getter="getPlatform", setter="setPlatform")
     * @SerializedName("platform")
     * @Type("string")
     */
    private $platform;

    /**
     * @Accessor(getter="getVersion", setter="setVersion")
     * @SerializedName("version")
     * @Type("string")
     */
    private $version;

    /**
     * @Accessor(getter="getIsReference", setter="setIsReference")
     * @SerializedName("isReference")
     * @Type("boolean")
     */
    private $isReference;


    /**
     * unique client ID (integer)
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
     * text.
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
     * text.
     */
    public function getPlatform()
    {
        return $this->platform;
    }
    
    public function setPlatform($platform)
    {
        $this->platform = $platform;
        return $this;
    }

    /**
     * text.
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
     * true if the browser is considered representative of modern browsers, false otherwise. This flag does not correlate to client's capabilities,
     * but is used by SSL Labs to determine if a particular configuration is effective. For example, to track Forward Secrecy support, we mark
     * several representative browsers as "modern" and then test to see if they succeed in negotiating a FS suite. Just as an illustration, modern
     * browsers are currently Chrome, Firefox (not ESR versions), IE/Win7, and Safari.
     */
    public function getIsReference()
    {
        return $this->isReference;
    }
    
    public function setIsReference($isReference)
    {
        $this->isReference = $isReference;
        return $this;
    }

}
