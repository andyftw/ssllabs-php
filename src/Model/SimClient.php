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
 * Class SimClient
 *
 * @access public
 * @package Andyftw\SSLLabs\Model
 *
 * @Serializer\AccessType("public_method")
 */
class SimClient
{
    /**
     * Unique client ID (integer).
     *
     * @var integer
     * @Serializer\Accessor(getter="getId", setter="setId")
     * @Serializer\SerializedName("id")
     * @Serializer\Type("integer")
     */
    private $id;

    /**
     * Text.
     *
     * @var string
     * @Serializer\Accessor(getter="getName", setter="setName")
     * @Serializer\SerializedName("name")
     * @Serializer\Type("string")
     */
    private $name;

    /**
     * Text.
     *
     * @var string
     * @Serializer\Accessor(getter="getPlatform", setter="setPlatform")
     * @Serializer\SerializedName("platform")
     * @Serializer\Type("string")
     */
    private $platform;

    /**
     * Text.
     *
     * @var string
     * @Serializer\Accessor(getter="getVersion", setter="setVersion")
     * @Serializer\SerializedName("version")
     * @Serializer\Type("string")
     */
    private $version;

    /**
     * True if the browser is considered representative of modern browsers, false otherwise. This flag does not
     * correlate to client's capabilities, but is used by SSL Labs to determine if a particular configuration is
     * effective. For example, to track Forward Secrecy support, we mark several representative browsers as "modern"
     * and then test to see if they succeed in negotiating a FS suite. Just as an illustration, modern browsers are
     * currently Chrome, Firefox (not ESR versions), IE/Win7, and Safari.
     *
     * @var boolean
     * @Serializer\Accessor(getter="getIsReference", setter="setIsReference")
     * @Serializer\SerializedName("isReference")
     * @Serializer\Type("boolean")
     */
    private $isReference;

    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * Unique client ID (integer).
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
     * Text.
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
     * Text.
     *
     * @return string
     */
    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * @param $platform
     *
     * @return $this
     */
    public function setPlatform($platform)
    {
        $this->platform = $platform;

        return $this;
    }

    /**
     * Text.
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
     * True if the browser is considered representative of modern browsers, false otherwise. This flag does not
     * correlate to client's capabilities, but is used by SSL Labs to determine if a particular configuration is
     * effective. For example, to track Forward Secrecy support, we mark several representative browsers as "modern"
     * and then test to see if they succeed in negotiating a FS suite. Just as an illustration, modern browsers are
     * currently Chrome, Firefox (not ESR versions), IE/Win7, and Safari.
     *
     * @return boolean
     */
    public function getIsReference()
    {
        return $this->isReference;
    }

    /**
     * @param $isReference
     *
     * @return $this
     */
    public function setIsReference($isReference)
    {
        $this->isReference = $isReference;

        return $this;
    }
}
