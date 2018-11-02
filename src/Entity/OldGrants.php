<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OldGrants
 *
 * @ORM\Table(name="old_grants")
 * @ORM\Entity
 */
class OldGrants
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
     * @ORM\Column(name="username", type="string", length=16, nullable=false)
     */
    private $username = '';

    /**
     * @var int|null
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

    /**
     * @var int
     *
     * @ORM\Column(name="year", type="integer", nullable=false)
     */
    private $year = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=8, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $amount = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="award_type", type="string", length=64, nullable=false)
     */
    private $awardType = '';


}
