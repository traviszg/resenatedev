<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SurveyQuestions
 *
 * @ORM\Table(name="survey_questions")
 * @ORM\Entity
 */
class SurveyQuestions
{
    /**
     * @var int
     *
     * @ORM\Column(name="survey_question_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $surveyQuestionId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="survey_id", type="integer", nullable=true)
     */
    private $surveyId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="question_title", type="text", length=65535, nullable=true)
     */
    private $questionTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="question_subtitle", type="text", length=65535, nullable=true)
     */
    private $questionSubtitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="answer_pool", type="string", length=200, nullable=true)
     */
    private $answerPool;

    /**
     * @var string|null
     *
     * @ORM\Column(name="answer_text", type="text", length=65535, nullable=true)
     */
    private $answerText;

    /**
     * @var string|null
     *
     * @ORM\Column(name="question_form_name", type="string", length=100, nullable=true)
     */
    private $questionFormName;

    /**
     * @var int|null
     *
     * @ORM\Column(name="question_type", type="integer", nullable=true)
     */
    private $questionType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="section", type="integer", nullable=true)
     */
    private $section;


}
