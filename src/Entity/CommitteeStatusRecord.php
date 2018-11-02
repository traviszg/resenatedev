<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommitteeStatusRecord
 *
 * @ORM\Table(name="committee_status_record")
 * @ORM\Entity
 */
class CommitteeStatusRecord
{
    /**
     * @var int
     *
     * @ORM\Column(name="record_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $recordId;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=50, nullable=false)
     */
    private $username;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var int
     *
     * @ORM\Column(name="committee_id", type="integer", nullable=false)
     */
    private $committeeId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="service_year", type="date", nullable=true)
     */
    private $serviceYear;

    /**
     * @var int
     *
     * @ORM\Column(name="committee_status_id", type="integer", nullable=false)
     */
    private $committeeStatusId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="notes", type="string", length=50, nullable=true)
     */
    private $notes;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="change_date", type="date", nullable=false)
     */
    private $changeDate;


}
