<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AwardsNominations
 *
 * @ORM\Table(name="awards_nominations")
 * @ORM\Entity
 */
class AwardsNominations
{
    /**
     * @var int
     *
     * @ORM\Column(name="award_nom_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $awardNomId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="award_id", type="integer", nullable=true)
     */
    private $awardId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nominee_id", type="integer", nullable=true)
     */
    private $nomineeId;

    /**
     * @var int
     *
     * @ORM\Column(name="email_sent", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $emailSent = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="nomination_type", type="string", length=0, nullable=true)
     */
    private $nominationType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="data", type="text", length=65535, nullable=true)
     */
    private $data;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_submitted", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dateSubmitted = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="year", type="date", nullable=true)
     */
    private $year;


}
