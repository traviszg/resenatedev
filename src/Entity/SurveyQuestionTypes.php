<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SurveyQuestionTypes
 *
 * @ORM\Table(name="survey_question_types")
 * @ORM\Entity
 */
class SurveyQuestionTypes
{
    /**
     * @var int
     *
     * @ORM\Column(name="question_type_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $questionTypeId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="question_type_title", type="string", length=50, nullable=true)
     */
    private $questionTypeTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="value_defaults", type="string", length=100, nullable=true, options={"default"="[]"})
     */
    private $valueDefaults = '[]';

    /**
     * @var string|null
     *
     * @ORM\Column(name="text_defaults", type="string", length=200, nullable=true)
     */
    private $textDefaults;


}
