<?php

namespace Andyftw\SSLLabs\Model;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SerializedName;

class SimDetails
{
    /**
     * @Accessor(getter="getResults", setter="setResults")
     * @SerializedName("results")
     * @Type("array<Andyftw\SSLLabs\Model\Simulation>")
     */
    private $results;
    /**
     * instances of [Simulation](#simulation).
     */
    public function getResults()
    {
        return $this->results;
    }

    public function setResults($results)
    {
        $this->results = $results;

        return $this;
    }
}
