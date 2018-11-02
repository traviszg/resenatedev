<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SurveyResponses
 *
 * @ORM\Table(name="survey_responses")
 * @ORM\Entity
 */
class SurveyResponses
{
    /**
     * @var int
     *
     * @ORM\Column(name="survey_response_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $surveyResponseId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="survey_id", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $surveyId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $userId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="data", type="text", length=65535, nullable=true)
     */
    private $data;

    /**
     * @var int|null
     *
     * @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="step", type="integer", nullable=true)
     */
    private $step;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $timestamp = 'CURRENT_TIMESTAMP';


}
