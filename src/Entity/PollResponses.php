<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PollResponses
 *
 * @ORM\Table(name="poll_responses")
 * @ORM\Entity
 */
class PollResponses
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="poll_id", type="integer", nullable=true)
     */
    private $pollId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="question_id", type="integer", nullable=true)
     */
    private $questionId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="username", type="string", length=16, nullable=true)
     */
    private $username;

    /**
     * @var string|null
     *
     * @ORM\Column(name="response", type="text", length=65535, nullable=true)
     */
    private $response;


}
