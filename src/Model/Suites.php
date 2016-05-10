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
 * Class Suites
 *
 * @access public
 * @package Andyftw\SSLLabs\Model
 *
 * @Serializer\AccessType("public_method")
 */
class Suites
{
    /**
     * List of [Suite objects](#suite).
     *
     * @var Andyftw\SSLLabs\Model\Suite[]
     * @Serializer\Accessor(getter="getList", setter="setList")
     * @Serializer\SerializedName("list")
     * @Serializer\Type("array<Andyftw\SSLLabs\Model\Suite>")
     */
    private $list;

    /**
     * True if the server actively selects cipher suites; if null, we were not able to determine if the server has a
     * preference.
     *
     * @var boolean
     * @Serializer\Accessor(getter="getPreference", setter="setPreference")
     * @Serializer\SerializedName("preference")
     * @Serializer\Type("boolean")
     */
    private $preference;

    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * List of [Suite objects](#suite).
     *
     * @return Andyftw\SSLLabs\Model\Suite[]
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * @param $list
     *
     * @return $this
     */
    public function setList($list)
    {
        $this->list = $list;

        return $this;
    }

    /**
     * True if the server actively selects cipher suites; if null, we were not able to determine if the server has a
     * preference.
     *
     * @return boolean
     */
    public function getPreference()
    {
        return $this->preference;
    }

    /**
     * @param $preference
     *
     * @return $this
     */
    public function setPreference($preference)
    {
        $this->preference = $preference;

        return $this;
    }
}
