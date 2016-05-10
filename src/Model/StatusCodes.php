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
 * Class StatusCodes
 *
 * @access public
 * @package Andyftw\SSLLabs\Model
 *
 * @Serializer\AccessType("public_method")
 */
class StatusCodes
{
    /**
     * A map containing all status details codes and the corresponding English translations. Please note that, once
     * in use, the codes will not change, whereas the translations may change at any time.
     *
     * @var string[]
     * @Serializer\Accessor(getter="getStatusDetails", setter="setStatusDetails")
     * @Serializer\SerializedName("statusDetails")
     * @Serializer\Type("array<string>")
     */
    private $statusDetails;

    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * A map containing all status details codes and the corresponding English translations. Please note that, once
     * in use, the codes will not change, whereas the translations may change at any time.
     *
     * @return string[]
     */
    public function getStatusDetails()
    {
        return $this->statusDetails;
    }

    /**
     * @param $statusDetails
     *
     * @return $this
     */
    public function setStatusDetails($statusDetails)
    {
        $this->statusDetails = $statusDetails;

        return $this;
    }
}
