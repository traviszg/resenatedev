<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BallotItem
 *
 * @ORM\Table(name="ballot_item")
 * @ORM\Entity
 */
class BallotItem
{
    /**
     * @var int
     *
     * @ORM\Column(name="item_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $itemId;

    /**
     * @var string
     *
     * @ORM\Column(name="ballot_code", type="string", length=8, nullable=false)
     */
    private $ballotCode = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="title", type="text", length=65535, nullable=true)
     */
    private $title;

    /**
     * @var bool
     *
     * @ORM\Column(name="select_limit", type="boolean", nullable=false, options={"default"="1"})
     */
    private $selectLimit = '1';


}
