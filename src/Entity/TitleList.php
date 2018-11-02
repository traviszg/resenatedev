<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TitleList
 *
 * @ORM\Table(name="title_list")
 * @ORM\Entity
 */
class TitleList
{
    /**
     * @var int
     *
     * @ORM\Column(name="title_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $titleId;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=100, nullable=false)
     */
    private $title = '';

    /**
     * @var int|null
     *
     * @ORM\Column(name="title_type", type="integer", nullable=true)
     */
    private $titleType;

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


}
