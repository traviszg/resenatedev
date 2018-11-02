<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TitleType
 *
 * @ORM\Table(name="title_type")
 * @ORM\Entity
 */
class TitleType
{
    /**
     * @var int
     *
     * @ORM\Column(name="title_type_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $titleTypeId;

    /**
     * @var string
     *
     * @ORM\Column(name="title_type", type="string", length=100, nullable=false)
     */
    private $titleType;

    /**
     * @var int
     *
     * @ORM\Column(name="isAdmin", type="integer", nullable=false)
     */
    private $isadmin = '0';


}
