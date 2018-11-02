<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CollegeList
 *
 * @ORM\Table(name="college_list")
 * @ORM\Entity
 */
class CollegeList
{
    /**
     * @var int
     *
     * @ORM\Column(name="college_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $collegeId;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=64, nullable=false)
     */
    private $title = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="abbreviation", type="string", length=8, nullable=true)
     */
    private $abbreviation = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="orgno", type="string", length=10, nullable=true)
     */
    private $orgno;


}
