<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommitteeStatusList
 *
 * @ORM\Table(name="committee_status_list")
 * @ORM\Entity
 */
class CommitteeStatusList
{
    /**
     * @var int
     *
     * @ORM\Column(name="com_status_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $comStatusId;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=50, nullable=false)
     */
    private $status;


}
