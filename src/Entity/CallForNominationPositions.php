<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CallForNominationPositions
 *
 * @ORM\Table(name="call_for_nomination_positions")
 * @ORM\Entity
 */
class CallForNominationPositions
{
    /**
     * @var int
     *
     * @ORM\Column(name="position_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $positionId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="position_title", type="text", length=65535, nullable=true)
     */
    private $positionTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="position_type", type="string", length=0, nullable=true)
     */
    private $positionType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="position_term", type="integer", nullable=true)
     */
    private $positionTerm;

    /**
     * @var int|null
     *
     * @ORM\Column(name="position_count", type="integer", nullable=true)
     */
    private $positionCount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="position_status", type="text", length=65535, nullable=true)
     */
    private $positionStatus;

    /**
     * @var string|null
     *
     * @ORM\Column(name="position_owner_id", type="string", length=50, nullable=true)
     */
    private $positionOwnerId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="college_pool", type="text", length=65535, nullable=true)
     */
    private $collegePool;

    /**
     * @var string|null
     *
     * @ORM\Column(name="department_pool", type="text", length=65535, nullable=true)
     */
    private $departmentPool;


}
