<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GrantsBannedUsers
 *
 * @ORM\Table(name="grants_banned_users")
 * @ORM\Entity
 */
class GrantsBannedUsers
{
    /**
     * @var int
     *
     * @ORM\Column(name="grants_banned_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $grantsBannedId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="grants_id", type="integer", nullable=true)
     */
    private $grantsId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reason", type="string", length=100, nullable=true)
     */
    private $reason = '';


}
