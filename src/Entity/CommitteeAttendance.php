<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommitteeAttendance
 *
 * @ORM\Table(name="committee_attendance")
 * @ORM\Entity
 */
class CommitteeAttendance
{
    /**
     * @var int
     *
     * @ORM\Column(name="com_attendance_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $comAttendanceId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="meeting_id", type="integer", nullable=true)
     */
    private $meetingId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="committee_id", type="integer", nullable=true)
     */
    private $committeeId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="member_id", type="integer", nullable=true)
     */
    private $memberId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="extra_id", type="integer", nullable=true)
     */
    private $extraId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="year", type="date", nullable=true)
     */
    private $year;


}
