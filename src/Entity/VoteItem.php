<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VoteItem
 *
 * @ORM\Table(name="vote_item")
 * @ORM\Entity
 */
class VoteItem
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
     * @var int
     *
     * @ORM\Column(name="item_id", type="integer", nullable=false)
     */
    private $itemId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=16, nullable=false)
     */
    private $username = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="custom_string", type="text", length=65535, nullable=true)
     */
    private $customString;

    /**
     * @var int
     *
     * @ORM\Column(name="votes", type="integer", nullable=false)
     */
    private $votes = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="paper_votes", type="integer", nullable=false)
     */
    private $paperVotes = '0';


}
