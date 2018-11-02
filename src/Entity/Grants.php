<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Grants
 *
 * @ORM\Table(name="grants")
 * @ORM\Entity
 */
class Grants
{
    /**
     * @var int
     *
     * @ORM\Column(name="grants_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $grantsId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="grants_title", type="string", length=100, nullable=true)
     */
    private $grantsTitle;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="start_date", type="date", nullable=true)
     */
    private $startDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="end_date", type="date", nullable=true)
     */
    private $endDate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="grants_template_id", type="integer", nullable=true)
     */
    private $grantsTemplateId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="year", type="integer", nullable=true)
     */
    private $year;

    /**
     * @var string|null
     *
     * @ORM\Column(name="afterSubmitBan", type="text", length=255, nullable=true)
     */
    private $aftersubmitban;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fundnoOptions", type="string", length=100, nullable=true)
     */
    private $fundnooptions;


}
