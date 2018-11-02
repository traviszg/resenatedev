<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ElectionVotes
 *
 * @ORM\Table(name="election_votes", indexes={@ORM\Index(name="election_id", columns={"election_id"})})
 * @ORM\Entity
 */
class ElectionVotes
{
    /**
     * @var int
     *
     * @ORM\Column(name="elec_vote_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $elecVoteId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nominee_id", type="integer", nullable=true)
     */
    private $nomineeId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="votes", type="integer", nullable=true)
     */
    private $votes;

    /**
     * @var int|null
     *
     * @ORM\Column(name="paper_votes", type="integer", nullable=true)
     */
    private $paperVotes;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $timestamp = 'CURRENT_TIMESTAMP';

    /**
     * @var \Election
     *
     * @ORM\ManyToOne(targetEntity="Election")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="election_id", referencedColumnName="election_id")
     * })
     */
    private $election;


}
