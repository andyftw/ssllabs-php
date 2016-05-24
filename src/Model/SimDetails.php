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
 * Class SimDetails.
 *
 *
 * @Serializer\AccessType("public_method")
 */
class SimDetails
{
    /**
     * Instances of [Simulation](#simulation).
     *
     * @var Andyftw\SSLLabs\Model\Simulation[]
     * @Serializer\Accessor(getter="getResults", setter="setResults")
     * @Serializer\SerializedName("results")
     * @Serializer\Type("array<Andyftw\SSLLabs\Model\Simulation>")
     */
    private $results;

    /**
     * Constructor.
     */
    public function __construct()
    {
    }

    /**
     * Instances of [Simulation](#simulation).
     *
     * @return Andyftw\SSLLabs\Model\Simulation[]
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * @param $results
     *
     * @return $this
     */
    public function setResults($results)
    {
        $this->results = $results;

        return $this;
    }
}
