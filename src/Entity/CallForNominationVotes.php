<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CallForNominationVotes
 *
 * @ORM\Table(name="call_for_nomination_votes", indexes={@ORM\Index(name="nomination_id", columns={"nomination_id"})})
 * @ORM\Entity
 */
class CallForNominationVotes
{
    /**
     * @var int
     *
     * @ORM\Column(name="nom_vote_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nomVoteId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="voter_id", type="integer", nullable=true)
     */
    private $voterId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $timestamp = 'CURRENT_TIMESTAMP';

    /**
     * @var \CallForNomination
     *
     * @ORM\ManyToOne(targetEntity="CallForNomination")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="nomination_id", referencedColumnName="nomination_id")
     * })
     */
    private $nomination;


}
