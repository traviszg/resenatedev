<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Awards
 *
 * @ORM\Table(name="awards")
 * @ORM\Entity
 */
class Awards
{
    /**
     * @var int
     *
     * @ORM\Column(name="award_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $awardId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="award_title", type="string", length=100, nullable=true)
     */
    private $awardTitle;

    /**
     * @var int|null
     *
     * @ORM\Column(name="award_template_id", type="integer", nullable=true)
     */
    private $awardTemplateId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="year", type="date", nullable=true)
     */
    private $year;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="start_date", type="datetime", nullable=true)
     */
    private $startDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="end_date", type="datetime", nullable=true)
     */
    private $endDate;


}
