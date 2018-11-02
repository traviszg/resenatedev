<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CallForNominationLogs
 *
 * @ORM\Table(name="call_for_nomination_logs")
 * @ORM\Entity
 */
class CallForNominationLogs
{
    /**
     * @var int
     *
     * @ORM\Column(name="call_log_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $callLogId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nomination_id", type="integer", nullable=true)
     */
    private $nominationId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nomination_status", type="integer", nullable=true)
     */
    private $nominationStatus;


}
