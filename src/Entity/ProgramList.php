<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProgramList
 *
 * @ORM\Table(name="program_list")
 * @ORM\Entity
 */
class ProgramList
{
    /**
     * @var int
     *
     * @ORM\Column(name="program_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $programId;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=64, nullable=false)
     */
    private $title = '';


}
