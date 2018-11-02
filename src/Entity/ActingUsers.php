<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActingUsers
 *
 * @ORM\Table(name="acting_users")
 * @ORM\Entity
 */
class ActingUsers
{
    /**
     * @var int
     *
     * @ORM\Column(name="acting_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $actingId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="first_name", type="string", length=50, nullable=true)
     */
    private $firstName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="surname", type="string", length=50, nullable=true)
     */
    private $surname;

    /**
     * @var int|null
     *
     * @ORM\Column(name="step", type="integer", nullable=true)
     */
    private $step;

    /**
     * @var int|null
     *
     * @ORM\Column(name="college_id", type="integer", nullable=true)
     */
    private $collegeId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="department_id", type="integer", nullable=true)
     */
    private $departmentId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="acting_start_date", type="date", nullable=true)
     */
    private $actingStartDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="acting_end_date", type="date", nullable=true)
     */
    private $actingEndDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="year", type="date", nullable=true)
     */
    private $year;

    /**
     * @var string|null
     *
     * @ORM\Column(name="research_specialization", type="text", length=65535, nullable=true)
     */
    private $researchSpecialization;


}
