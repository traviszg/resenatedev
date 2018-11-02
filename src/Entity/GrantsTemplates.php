<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GrantsTemplates
 *
 * @ORM\Table(name="grants_templates")
 * @ORM\Entity
 */
class GrantsTemplates
{
    /**
     * @var int
     *
     * @ORM\Column(name="grants_template_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $grantsTemplateId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="template_name", type="string", length=45, nullable=true)
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
     * @ORM\Column(name="template_review_file", type="string", length=100, nullable=true)
     */
    private $templateReviewFile;

    /**
     * @var string|null
     *
     * @ORM\Column(name="template_display_file", type="string", length=100, nullable=true)
     */
    private $templateDisplayFile;

    /**
     * @var string|null
     *
     * @ORM\Column(name="guidelines", type="text", length=65535, nullable=true)
     */
    private $guidelines;


}
