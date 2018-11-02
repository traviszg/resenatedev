<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PpsTitleList
 *
 * @ORM\Table(name="pps_title_list")
 * @ORM\Entity
 */
class PpsTitleList
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
     * @var int|null
     *
     * @ORM\Column(name="title", type="integer", nullable=true)
     */
    private $title;

    /**
     * @var string|null
     *
     * @ORM\Column(name="title_description", type="string", length=100, nullable=true)
     */
    private $titleDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tuc", type="string", length=11, nullable=true, options={"comment"="Title Unit Code"})
     */
    private $tuc = '';

    /**
     * @var int|null
     *
     * @ORM\Column(name="cto", type="integer", nullable=true, options={"comment"="Class Title Outline"})
     */
    private $cto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="custom_title", type="string", length=100, nullable=true)
     */
    private $customTitle;


}
