<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PollList
 *
 * @ORM\Table(name="poll_list")
 * @ORM\Entity
 */
class PollList
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
     * @ORM\Column(name="title", type="string", length=200, nullable=true)
     */
    private $title;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="active", type="boolean", nullable=true)
     */
    private $active;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="allow_anonymous", type="boolean", nullable=true)
     */
    private $allowAnonymous;

    /**
     * @var string
     *
     * @ORM\Column(name="email_recipient", type="string", length=255, nullable=false, options={"default"="jason.scheirer@email.ucr.edu"})
     */
    private $emailRecipient = 'jason.scheirer@email.ucr.edu';

    /**
     * @var string|null
     *
     * @ORM\Column(name="text_node", type="string", length=40, nullable=true)
     */
    private $textNode;


}
