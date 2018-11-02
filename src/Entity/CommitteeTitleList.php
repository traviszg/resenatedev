<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommitteeTitleList
 *
 * @ORM\Table(name="committee_title_list")
 * @ORM\Entity
 */
class CommitteeTitleList
{
    /**
     * @var int
     *
     * @ORM\Column(name="committee_title_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $committeeTitleId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="committee_title", type="string", length=20, nullable=true)
     */
    private $committeeTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="committee_formal_title", type="string", length=50, nullable=true)
     */
    private $committeeFormalTitle;

    /**
     * @var int|null
     *
     * @ORM\Column(name="order", type="integer", nullable=true)
     */
    private $order;


}
