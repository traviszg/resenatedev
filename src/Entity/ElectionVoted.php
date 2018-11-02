<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ElectionVoted
 *
 * @ORM\Table(name="election_voted")
 * @ORM\Entity
 */
class ElectionVoted
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="election_id", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $electionId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="votes_submitted", type="integer", nullable=true)
     */
    private $votesSubmitted;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="timestamp", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $timestamp = 'CURRENT_TIMESTAMP';


}
