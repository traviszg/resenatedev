<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserStatusRecord
 *
 * @ORM\Table(name="user_status_record")
 * @ORM\Entity
 */
class UserStatusRecord
{
    /**
     * @var int
     *
     * @ORM\Column(name="record_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $recordId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="username", type="string", length=16, nullable=true)
     */
    private $username = '';

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $userId;

    /**
     * @var int
     *
     * @ORM\Column(name="status_id", type="integer", nullable=false)
     */
    private $statusId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="change_date", type="date", nullable=false, options={"default"="0000-00-00"})
     */
    private $changeDate = '0000-00-00';


}
