<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LoginList
 *
 * @ORM\Table(name="login_list", indexes={@ORM\Index(name="user_id", columns={"user_id"})})
 * @ORM\Entity
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
     * @ORM\ManyToOne(targetEntity="UserInfoList")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="user_id")
     * })
     */
    private $user;

    /**
     * @var \UserInfoList
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="UserInfoList")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="username", referencedColumnName="username")
     * })
     */
    private $username;


}
