<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Surveys
 *
 * @ORM\Table(name="surveys")
 * @ORM\Entity
 */
class Surveys
{
    /**
     * @var int
     *
     * @ORM\Column(name="survey_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $surveyId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="survey_title", type="string", length=100, nullable=true)
     */
    private $surveyTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="year", type="date", nullable=true)
     */
    private $year;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="start_date", type="date", nullable=true)
     */
    private $startDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="end_date", type="date", nullable=true)
     */
    private $endDate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="survey_type_id", type="integer", nullable=true)
     */
    private $surveyTypeId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="survey_template_name", type="string", length=100, nullable=true)
     */
    private $surveyTemplateName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="department_array", type="string", length=100, nullable=true)
     */
    private $departmentArray;

    /**
     * @var string|null
     *
     * @ORM\Column(name="college_array", type="string", length=100, nullable=true)
     */
    private $collegeArray;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_array", type="string", length=1000, nullable=true)
     */
    private $userArray;

    /**
     * @var int
     *
     * @ORM\Column(name="isOpen", type="integer", nullable=false)
     */
    private $isopen = '0';


}
