<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommitteePrefAssignments
 *
 * @ORM\Table(name="committee_pref_assignments")
 * @ORM\Entity
 */
class CommitteePrefAssignments
{
    /**
     * @var int
     *
     * @ORM\Column(name="cpfa_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cpfaId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="committee_id", type="integer", nullable=true)
     */
    private $committeeId;

    /**
     * @var int
     *
     * @ORM\Column(name="year", type="integer", nullable=false, options={"default"="2017"})
     */
    private $year = '2017';

    /**
     * @var int|null
     *
     * @ORM\Column(name="cpf_id", type="integer", nullable=true)
     */
    private $cpfId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $timestamp = 'CURRENT_TIMESTAMP';


}
