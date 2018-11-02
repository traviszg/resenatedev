<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserInfoVerify
 *
 * @ORM\Table(name="user_info_verify", indexes={@ORM\Index(name="user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class UserInfoVerify
{
    /**
     * @var int
     *
     * @ORM\Column(name="uiv_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uivId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="correct", type="integer", nullable=true)
     */
    private $correct = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="data", type="text", length=65535, nullable=true)
     */
    private $data;

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


}
