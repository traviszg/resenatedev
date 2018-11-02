<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BylawCodes
 *
 * @ORM\Table(name="bylaw_codes")
 * @ORM\Entity
 */
class BylawCodes
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
     * @ORM\Column(name="title", type="string", length=100, nullable=false)
     */
    private $title = '';

    /**
     * @var bool
     *
     * @ORM\Column(name="display_code", type="boolean", nullable=false)
     */
    private $displayCode = '0';


}
