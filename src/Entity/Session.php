<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Session
 *
 * @ORM\Table(name="session")
 * @ORM\Entity
 */
class Session
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
     * @var string|null
     *
     * @ORM\Column(name="session_name", type="string", length=20, nullable=true)
     */
    private $sessionName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="session_data", type="text", length=65535, nullable=true)
     */
    private $sessionData;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="session_time", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $sessionTime = 'CURRENT_TIMESTAMP';


}
