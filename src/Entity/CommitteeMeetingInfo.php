<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommitteeMeetingInfo
 *
 * @ORM\Table(name="committee_meeting_info")
 * @ORM\Entity
 */
class CommitteeMeetingInfo
{
    /**
     * @var int
     *
     * @ORM\Column(name="committee_meeting_info_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $committeeMeetingInfoId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="committee_id", type="integer", nullable=true)
     */
    private $committeeId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="year", type="integer", nullable=true)
     */
    private $year;

    /**
     * @var string|null
     *
     * @ORM\Column(name="location", type="text", length=65535, nullable=true)
     */
    private $location;

    /**
     * @var string|null
     *
     * @ORM\Column(name="date", type="text", length=65535, nullable=true)
     */
    private $date;

    /**
     * @var string|null
     *
     * @ORM\Column(name="time_start", type="string", length=10, nullable=true)
     */
    private $timeStart = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="time_end", type="string", length=10, nullable=true)
     */
    private $timeEnd;


}
