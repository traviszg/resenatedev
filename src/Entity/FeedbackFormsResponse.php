<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FeedbackFormsResponse
 *
 * @ORM\Table(name="feedback_forms_response")
 * @ORM\Entity
 */
class FeedbackFormsResponse
{
    /**
     * @var int
     *
     * @ORM\Column(name="feedback_response_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $feedbackResponseId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="feedback_form_id", type="integer", nullable=true)
     */
    private $feedbackFormId;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="response", type="text", length=65535, nullable=false)
     */
    private $response;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $timestamp = 'CURRENT_TIMESTAMP';


}
