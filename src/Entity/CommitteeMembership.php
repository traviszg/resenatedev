<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommitteeMembership
 *
 * @ORM\Table(name="committee_membership", indexes={@ORM\Index(name="membership_username", columns={"username"}), @ORM\Index(name="membership_year", columns={"year"})})
 * @ORM\Entity
 */
class CommitteeMembership
{
    /**
     * @var int
     *
     * @ORM\Column(name="the_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $theId;

    /**
     * @var int
     *
     * @ORM\Column(name="committee_id", type="integer", nullable=false)
     */
    private $committeeId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=16, nullable=false)
     */
    private $username = '';

    /**
     * @var int|null
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

    /**
     * @var int
     *
     * @ORM\Column(name="year", type="integer", nullable=false)
     */
    private $year = '0';

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
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=0, nullable=true)
     */
    private $type;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="string", length=200, nullable=true)
     */
    private $note;

    /**
     * @var string|null
     *
     * @ORM\Column(name="other_title", type="string", length=200, nullable=true)
     */
    private $otherTitle;

    /**
     * @var int
     *
     * @ORM\Column(name="letter_sent", type="integer", nullable=false)
     */
    private $letterSent = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $timestamp = 'CURRENT_TIMESTAMP';


}
