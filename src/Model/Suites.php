<?php

namespace Andyftw\SSLLabs\Model; 

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SerializedName;

class Suites
{
    /**
     * @Accessor(getter="getList", setter="setList")
     * @SerializedName("list")
     * @Type("array<Andyftw\SSLLabs\Model\Suite>")
     */
    private $list;

    /**
     * @Accessor(getter="getPreference", setter="setPreference")
     * @SerializedName("preference")
     * @Type("boolean")
     */
    private $preference;


    /**
     * list of [Suite objects](#suite)
     */
    public function getList()
    {
        return $this->list;
    }
    
    public function setList($list)
    {
        $this->list = $list;
        return $this;
    }

    /**
     * true if the server actively selects cipher suites; if null, we were not able to determine if the server has a preference
     */
    public function getPreference()
    {
        return $this->preference;
    }
    
    public function setPreference($preference)
    {
        $this->preference = $preference;
        return $this;
    }

}
