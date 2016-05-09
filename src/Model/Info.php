<?php

namespace Andyftw\SSLLabs\Model; 

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SerializedName;

class Info
{
    /**
     * @Accessor(getter="getEngineVersion", setter="setEngineVersion")
     * @SerializedName("engineVersion")
     * @Type("string")
     */
    private $engineVersion;

    /**
     * @Accessor(getter="getCriteriaVersion", setter="setCriteriaVersion")
     * @SerializedName("criteriaVersion")
     * @Type("string")
     */
    private $criteriaVersion;

    /**
     * @Accessor(getter="getMaxAssessments", setter="setMaxAssessments")
     * @SerializedName("maxAssessments")
     * @Type("integer")
     */
    private $maxAssessments;

    /**
     * @Accessor(getter="getCurrentAssessments", setter="setCurrentAssessments")
     * @SerializedName("currentAssessments")
     * @Type("integer")
     */
    private $currentAssessments;

    /**
     * @Accessor(getter="getNewAssessmentCoolOff", setter="setNewAssessmentCoolOff")
     * @SerializedName("newAssessmentCoolOff")
     * @Type("integer")
     */
    private $newAssessmentCoolOff;

    /**
     * @Accessor(getter="getMessages", setter="setMessages")
     * @SerializedName("messages")
     * @Type("array<string>")
     */
    private $messages;


    /**
     * SSL Labs software version as a string (e.g., "1.11.14")
     */
    public function getEngineVersion()
    {
        return $this->engineVersion;
    }
    
    public function setEngineVersion($engineVersion)
    {
        $this->engineVersion = $engineVersion;
        return $this;
    }

    /**
     * rating criteria version as a string (e.g., "2009f")
     */
    public function getCriteriaVersion()
    {
        return $this->criteriaVersion;
    }
    
    public function setCriteriaVersion($criteriaVersion)
    {
        $this->criteriaVersion = $criteriaVersion;
        return $this;
    }

    /**
     * the maximum number of concurrent assessments the client is allowed to initiate.
     */
    public function getMaxAssessments()
    {
        return $this->maxAssessments;
    }
    
    public function setMaxAssessments($maxAssessments)
    {
        $this->maxAssessments = $maxAssessments;
        return $this;
    }

    /**
     * the number of ongoing assessments submitted by this client.
     */
    public function getCurrentAssessments()
    {
        return $this->currentAssessments;
    }
    
    public function setCurrentAssessments($currentAssessments)
    {
        $this->currentAssessments = $currentAssessments;
        return $this;
    }

    /**
     * the cool-off period after each new assessment, in milliseconds; you're not allowed to submit a new assessment before the cool-off expires,
     * otherwise you'll get a 429.
     */
    public function getNewAssessmentCoolOff()
    {
        return $this->newAssessmentCoolOff;
    }
    
    public function setNewAssessmentCoolOff($newAssessmentCoolOff)
    {
        $this->newAssessmentCoolOff = $newAssessmentCoolOff;
        return $this;
    }

    /**
     * a list of messages (strings). Messages can be public (sent to everyone) and private (sent only to the invoking client).
     */
    public function getMessages()
    {
        return $this->messages;
    }
    
    public function setMessages($messages)
    {
        $this->messages = $messages;
        return $this;
    }

}
