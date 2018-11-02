<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bylaws
 *
 * @ORM\Table(name="bylaws")
 * @ORM\Entity
 */
class Bylaws
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=6, nullable=false)
     */
    private $code = '';

    /**
     * @var string
     *
     * @ORM\Column(name="section", type="string", length=20, nullable=false)
     */
    private $section = '';

    /**
     * @var bool
     *
     * @ORM\Column(name="isheader", type="boolean", nullable=false)
     */
    private $isheader = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="section_text", type="text", length=65535, nullable=false)
     */
    private $sectionText;


}
