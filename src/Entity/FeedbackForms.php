<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FeedbackForms
 *
 * @ORM\Table(name="feedback_forms")
 * @ORM\Entity
 */
class FeedbackForms
{
    /**
     * @var int
     *
     * @ORM\Column(name="feedback_form_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $feedbackFormId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="feedback_form_title", type="string", length=100, nullable=true)
     */
    private $feedbackFormTitle;


}
