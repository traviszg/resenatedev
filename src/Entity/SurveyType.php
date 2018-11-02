<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SurveyType
 *
 * @ORM\Table(name="survey_type")
 * @ORM\Entity
 */
class SurveyType
{
    /**
     * @var int
     *
     * @ORM\Column(name="survey_type_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $surveyTypeId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="survey_type", type="string", length=100, nullable=true)
     */
    private $surveyType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="survey_template_config", type="string", length=50, nullable=true)
     */
    private $surveyTemplateConfig;


}
