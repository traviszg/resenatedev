<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GrantsApplications
 *
 * @ORM\Table(name="grants_applications", indexes={@ORM\Index(name="user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class GrantsApplications
{
    /**
     * @var int
     *
     * @ORM\Column(name="grants_app_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $grantsAppId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="grants_id", type="integer", nullable=true)
     */
    private $grantsId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_created", type="datetime", nullable=true)
     */
    private $dateCreated;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_submitted", type="datetime", nullable=true)
     */
    private $dateSubmitted;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_updated", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdated = 'CURRENT_TIMESTAMP';

    /**
     * @var string|null
     *
     * @ORM\Column(name="data", type="text", length=65535, nullable=true)
     */
    private $data;

    /**
     * @var int
     *
     * @ORM\Column(name="email_sent", type="integer", nullable=false)
     */
    private $emailSent = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $status = '1';

    /**
     * @var int|null
     *
     * @ORM\Column(name="total_rewarded", type="integer", nullable=true)
     */
    private $totalRewarded;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fundno", type="string", length=50, nullable=true)
     */
    private $fundno;

    /**
     * @var \UserInfoList
     *
     * @ORM\ManyToOne(targetEntity="UserInfoList")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="user_id")
     * })
     */
    private $user;


}
