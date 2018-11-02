<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserStatusList
 *
 * @ORM\Table(name="user_status_list")
 * @ORM\Entity
 */
class UserStatusList
{
    /**
     * @var int
     *
     * @ORM\Column(name="status_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $statusId;

    /**
     * @var string
     *
     * @ORM\Column(name="user_status", type="string", length=100, nullable=false)
     */
    private $userStatus = '';


}
