<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notifications
 *
 * @ORM\Table(name="notifications", indexes={@ORM\Index(name="notification_type_id", columns={"notification_type_id"}), @ORM\Index(name="to_user_id", columns={"to_user_id"})})
 * @ORM\Entity
 */
class Notifications
{
    /**
     * @var int
     *
     * @ORM\Column(name="notification_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $notificationId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="from_user_id", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $fromUserId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="message", type="text", length=65535, nullable=true)
     */
    private $message;

    /**
     * @var bool
     *
     * @ORM\Column(name="read", type="boolean", nullable=false)
     */
    private $read = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="expires", type="date", nullable=true)
     */
    private $expires;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $timestamp = 'CURRENT_TIMESTAMP';

    /**
     * @var \NotificationsType
     *
     * @ORM\ManyToOne(targetEntity="NotificationsType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="notification_type_id", referencedColumnName="notification_type_id")
     * })
     */
    private $notificationType;

    /**
     * @var \UserInfoList
     *
     * @ORM\ManyToOne(targetEntity="UserInfoList")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_user_id", referencedColumnName="user_id")
     * })
     */
    private $toUser;


}
