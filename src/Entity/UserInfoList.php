<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserInfoList
 *
 * @ORM\Table(name="user_info_list", indexes={@ORM\Index(name="user_info_name", columns={"user_id"}), @ORM\Index(name="department", columns={"department"})})
 * @ORM\Entity
 */
class UserInfoList
{
    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="net_id", type="string", length=32, nullable=true)
     */
    private $netId;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=16, nullable=false)
     */
    private $username = '';

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=20, nullable=false)
     */
    private $firstName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="surname", type="string", length=20, nullable=false)
     */
    private $surname = '';

    /**
     * @var int|null
     *
     * @ORM\Column(name="step", type="integer", nullable=true)
     */
    private $step;

    /**
     * @var int
     *
     * @ORM\Column(name="scale", type="integer", nullable=false)
     */
    private $scale = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="title", type="integer", nullable=false)
     */
    private $title = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="secondary_title", type="integer", nullable=false)
     */
    private $secondaryTitle = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="college", type="integer", nullable=true)
     */
    private $college;

    /**
     * @var int
     *
     * @ORM\Column(name="secondary_college", type="integer", nullable=false)
     */
    private $secondaryCollege = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="secondary_department", type="integer", nullable=false)
     */
    private $secondaryDepartment = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="primary_fte", type="float", precision=10, scale=0, nullable=false, options={"default"="1"})
     */
    private $primaryFte = '1';

    /**
     * @var float
     *
     * @ORM\Column(name="secondary_fte", type="float", precision=10, scale=0, nullable=false)
     */
    private $secondaryFte = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=40, nullable=true)
     */
    private $email = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone", type="string", length=24, nullable=true)
     */
    private $phone = '';

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=0, nullable=false, options={"default"="unset"})
     */
    private $gender = 'unset';

    /**
     * @var bool
     *
     * @ORM\Column(name="no_mail", type="boolean", nullable=false)
     */
    private $noMail = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hire_date", type="date", nullable=false, options={"default"="0000-00-00"})
     */
    private $hireDate = '0000-00-00';

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_picture", type="string", length=80, nullable=true)
     */
    private $userPicture;

    /**
     * @var int
     *
     * @ORM\Column(name="status_id", type="integer", nullable=false)
     */
    private $statusId = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="biography", type="text", length=65535, nullable=true)
     */
    private $biography;

    /**
     * @var int|null
     *
     * @ORM\Column(name="program", type="integer", nullable=true)
     */
    private $program;

    /**
     * @var int|null
     *
     * @ORM\Column(name="secondary_program", type="integer", nullable=true)
     */
    private $secondaryProgram;

    /**
     * @var int
     *
     * @ORM\Column(name="program_title", type="integer", nullable=false)
     */
    private $programTitle = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="secondary_program_title", type="integer", nullable=false)
     */
    private $secondaryProgramTitle = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="research_specialization", type="text", length=65535, nullable=true)
     */
    private $researchSpecialization;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="user_date_created", type="datetime", nullable=true)
     */
    private $userDateCreated;

    /**
     * @var \DepartmentList
     *
     * @ORM\ManyToOne(targetEntity="DepartmentList")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="department", referencedColumnName="department_id")
     * })
     */
    private $department;

    public function getFirstName() {
        return $this->firstName;
    }

    public function getUserId() {
        return $this->userId;
    }

    public function getNetId() {
        return $this->netId;
    }

    public function getStatusId() {
        return $this->statusId;
    }

    public function getResearchSpec() {
        return $this->researchSpecialization;
    }
}
