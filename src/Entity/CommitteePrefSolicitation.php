<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommitteePrefSolicitation
 *
 * @ORM\Table(name="committee_pref_solicitation")
 * @ORM\Entity
 */
class CommitteePrefSolicitation
{
    /**
     * @var int
     *
     * @ORM\Column(name="sol_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $solId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="committee_id", type="integer", nullable=true)
     */
    private $committeeId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cpf_id", type="integer", nullable=true)
     */
    private $cpfId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="year", type="date", nullable=true)
     */
    private $year;

    /**
     * @var string
     *
     * @ORM\Column(name="reason", type="string", length=100, nullable=false)
     */
    private $reason = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="text", length=65535, nullable=true)
     */
    private $note;


}
