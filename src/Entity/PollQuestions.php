<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PollQuestions
 *
 * @ORM\Table(name="poll_questions")
 * @ORM\Entity
 */
class PollQuestions
{
    /**
     * @var int
     *
     * @ORM\Column(name="question_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $questionId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id", type="integer", nullable=true)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="title", type="text", length=65535, nullable=true)
     */
    private $title;

    /**
     * @var string|null
     *
     * @ORM\Column(name="question_type", type="string", length=0, nullable=true)
     */
    private $questionType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="zindex", type="integer", nullable=true, options={"default"="1"})
     */
    private $zindex = '1';


}
