<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LoginList
 *
 * @ORM\Table(name="login_list", indexes={@ORM\Index(name="user_id", columns={"user_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class LoginList
{
    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=16, nullable=false)
     */
    private $password = '';

    /**
     * @var int
     *
     * @ORM\Column(name="role", type="integer", nullable=false)
     */
    private $role = '0';

    /**
     * @var string|null
     *
     * @ORM\Id
     * @ORM\OneToOne(targetEntity="UserInfoList")
     * @ORM\Column(name="netid", type="string", length=32, nullable=true)
     */
    private $netid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $timestamp = 'CURRENT_TIMESTAMP';

    /**
     * @var \UserInfoList
     *
     * @ORM\OneToOne(targetEntity="UserInfoList")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="user_id", nullable=false)
     * })
     */
    private $user;

    /**
     * @var string|null
     *
     * @ORM\Column(name="username", type="string", length=32, nullable=true)
     */
    private $username;

    public function getRole() {
        return $this->role;
    }

    public function getUserId() {
        return $this->user;
    }
}
