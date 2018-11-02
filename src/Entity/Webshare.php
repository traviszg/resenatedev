<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Webshare
 *
 * @ORM\Table(name="webshare", uniqueConstraints={@ORM\UniqueConstraint(name="ticket_unique", columns={"ticket"})})
 * @ORM\Entity
 */
class Webshare
{
    /**
     * @var int
     *
     * @ORM\Column(name="ticket_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ticketId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_id", type="string", length=50, nullable=true)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="ticket", type="string", length=64, nullable=false)
     */
    private $ticket = '';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="expireTime", type="datetime", nullable=true)
     */
    private $expiretime;

    /**
     * @var string|null
     *
     * @ORM\Column(name="emails", type="text", length=65535, nullable=true)
     */
    private $emails;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="isWritable", type="boolean", nullable=true)
     */
    private $iswritable;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_created", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dateCreated = 'CURRENT_TIMESTAMP';


}
