<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * History
 *
 * @ORM\Table(name="history")
 * @ORM\Entity
 */
class History
{
    /**
     * @var int
     *
     * @ORM\Column(name="idhistory", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idhistory;

    /**
     * @var string|null
     *
     * @ORM\Column(name="username", type="string", length=45, nullable=true)
     */
    private $username;

    /**
     * @var string|null
     *
     * @ORM\Column(name="command", type="text", length=0, nullable=true)
     */
    private $command;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $timestamp = 'CURRENT_TIMESTAMP';


}
