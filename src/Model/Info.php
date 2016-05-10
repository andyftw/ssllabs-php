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
 * Class Info
 *
 * @access public
 * @package Andyftw\SSLLabs\Model
 *
 * @Serializer\AccessType("public_method")
 */
class Info
{
    /**
     * SSL Labs software version as a string (e.g., "1.11.14").
     *
     * @var string
     * @Serializer\Accessor(getter="getEngineVersion", setter="setEngineVersion")
     * @Serializer\SerializedName("engineVersion")
     * @Serializer\Type("string")
     */
    private $engineVersion;

    /**
     * Rating criteria version as a string (e.g., "2009f").
     *
     * @var string
     * @Serializer\Accessor(getter="getCriteriaVersion", setter="setCriteriaVersion")
     * @Serializer\SerializedName("criteriaVersion")
     * @Serializer\Type("string")
     */
    private $criteriaVersion;

    /**
     * The maximum number of concurrent assessments the client is allowed to initiate.
     *
     * @var integer
     * @Serializer\Accessor(getter="getMaxAssessments", setter="setMaxAssessments")
     * @Serializer\SerializedName("maxAssessments")
     * @Serializer\Type("integer")
     */
    private $maxAssessments;

    /**
     * The number of ongoing assessments submitted by this client.
     *
     * @var integer
     * @Serializer\Accessor(getter="getCurrentAssessments", setter="setCurrentAssessments")
     * @Serializer\SerializedName("currentAssessments")
     * @Serializer\Type("integer")
     */
    private $currentAssessments;

    /**
     * The cool-off period after each new assessment, in milliseconds; you're not allowed to submit a new assessment
     * before the cool-off expires, otherwise you'll get a 429.
     *
     * @var integer
     * @Serializer\Accessor(getter="getNewAssessmentCoolOff", setter="setNewAssessmentCoolOff")
     * @Serializer\SerializedName("newAssessmentCoolOff")
     * @Serializer\Type("integer")
     */
    private $newAssessmentCoolOff;

    /**
     * A list of messages (strings). Messages can be public (sent to everyone) and private (sent only to the invoking
     * client).
     *
     * @var string[]
     * @Serializer\Accessor(getter="getMessages", setter="setMessages")
     * @Serializer\SerializedName("messages")
     * @Serializer\Type("array<string>")
     */
    private $messages;

    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * SSL Labs software version as a string (e.g., "1.11.14").
     *
     * @return string
     */
    public function getEngineVersion()
    {
        return $this->engineVersion;
    }

    /**
     * @param $engineVersion
     *
     * @return $this
     */
    public function setEngineVersion($engineVersion)
    {
        $this->engineVersion = $engineVersion;

        return $this;
    }

    /**
     * Rating criteria version as a string (e.g., "2009f").
     *
     * @return string
     */
    public function getCriteriaVersion()
    {
        return $this->criteriaVersion;
    }

    /**
     * @param $criteriaVersion
     *
     * @return $this
     */
    public function setCriteriaVersion($criteriaVersion)
    {
        $this->criteriaVersion = $criteriaVersion;

        return $this;
    }

    /**
     * The maximum number of concurrent assessments the client is allowed to initiate.
     *
     * @return integer
     */
    public function getMaxAssessments()
    {
        return $this->maxAssessments;
    }

    /**
     * @param $maxAssessments
     *
     * @return $this
     */
    public function setMaxAssessments($maxAssessments)
    {
        $this->maxAssessments = $maxAssessments;

        return $this;
    }

    /**
     * The number of ongoing assessments submitted by this client.
     *
     * @return integer
     */
    public function getCurrentAssessments()
    {
        return $this->currentAssessments;
    }

    /**
     * @param $currentAssessments
     *
     * @return $this
     */
    public function setCurrentAssessments($currentAssessments)
    {
        $this->currentAssessments = $currentAssessments;

        return $this;
    }

    /**
     * The cool-off period after each new assessment, in milliseconds; you're not allowed to submit a new assessment
     * before the cool-off expires, otherwise you'll get a 429.
     *
     * @return integer
     */
    public function getNewAssessmentCoolOff()
    {
        return $this->newAssessmentCoolOff;
    }

    /**
     * @param $newAssessmentCoolOff
     *
     * @return $this
     */
    public function setNewAssessmentCoolOff($newAssessmentCoolOff)
    {
        $this->newAssessmentCoolOff = $newAssessmentCoolOff;

        return $this;
    }

    /**
     * A list of messages (strings). Messages can be public (sent to everyone) and private (sent only to the invoking
     * client).
     *
     * @return string[]
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * @param $messages
     *
     * @return $this
     */
    public function setMessages($messages)
    {
        $this->messages = $messages;

        return $this;
    }
}
