<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AwardsRecipients
 *
 * @ORM\Table(name="awards_recipients")
 * @ORM\Entity
 */
class AwardsRecipients
{
    /**
     * @var int
     *
     * @ORM\Column(name="recipient_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $recipientId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="award_id", type="integer", nullable=true)
     */
    private $awardId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="award_type", type="string", length=0, nullable=true)
     */
    private $awardType;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="project_title", type="text", length=65535, nullable=true)
     */
    private $projectTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="recipient_bio", type="text", length=65535, nullable=true)
     */
    private $recipientBio;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="academic_year", type="date", nullable=true)
     */
    private $academicYear;


}
