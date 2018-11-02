<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nominations
 *
 * @ORM\Table(name="nominations")
 * @ORM\Entity
 */
class Nominations
{
    /**
     * @var int
     *
     * @ORM\Column(name="nomination_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nominationId;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     */
    private $id = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=16, nullable=false)
     */
    private $username = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="nomination", type="text", length=65535, nullable=true)
     */
    private $nomination;


}
