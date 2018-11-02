<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NotificationsType
 *
 * @ORM\Table(name="notifications_type")
 * @ORM\Entity
 */
class NotificationsType
{
    /**
     * @var int
     *
     * @ORM\Column(name="notification_type_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $notificationTypeId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="notification_type", type="string", length=50, nullable=true)
     */
    private $notificationType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="module", type="string", length=50, nullable=true)
     */
    private $module;


}
