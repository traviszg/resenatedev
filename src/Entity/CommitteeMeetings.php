<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommitteeMeetings
 *
 * @ORM\Table(name="committee_meetings")
 * @ORM\Entity
 */
class CommitteeMeetings
{
    /**
     * @var int
     *
     * @ORM\Column(name="committee_meeting_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $committeeMeetingId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="committee_id", type="integer", nullable=true)
     */
    private $committeeId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="year", type="date", nullable=true)
     */
    private $year;

    /**
     * @var string|null
     *
     * @ORM\Column(name="date_start", type="string", length=50, nullable=true)
     */
    private $dateStart;

    /**
     * @var string|null
     *
     * @ORM\Column(name="date_end", type="string", length=50, nullable=true)
     */
    private $dateEnd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="time_start", type="string", length=10, nullable=true)
     */
    private $timeStart;

    /**
     * @var string|null
     *
     * @ORM\Column(name="time_end", type="string", length=10, nullable=true)
     */
    private $timeEnd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="location", type="text", length=65535, nullable=true)
     */
    private $location;

    /**
     * @var string|null
     *
     * @ORM\Column(name="agenda_link", type="text", length=65535, nullable=true)
     */
    private $agendaLink;

    /**
     * @var string|null
     *
     * @ORM\Column(name="minutes_link", type="text", length=65535, nullable=true)
     */
    private $minutesLink;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cancelled", type="integer", nullable=true)
     */
    private $cancelled;


}
