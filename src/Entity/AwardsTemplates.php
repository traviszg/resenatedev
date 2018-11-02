<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AwardsTemplates
 *
 * @ORM\Table(name="awards_templates")
 * @ORM\Entity
 */
class AwardsTemplates
{
    /**
     * @var int
     *
     * @ORM\Column(name="award_template_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $awardTemplateId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="template_name", type="string", length=50, nullable=true)
     */
    private $templateName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="template_file", type="string", length=100, nullable=true)
     */
    private $templateFile;

    /**
     * @var string|null
     *
     * @ORM\Column(name="template_display", type="string", length=100, nullable=true)
     */
    private $templateDisplay;

    /**
     * @var string|null
     *
     * @ORM\Column(name="template_email", type="string", length=100, nullable=true)
     */
    private $templateEmail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="guidelines", type="text", length=65535, nullable=true)
     */
    private $guidelines;


}
