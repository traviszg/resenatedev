<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CallForNomination
 *
 * @ORM\Table(name="call_for_nomination")
 * @ORM\Entity
 */
class CallForNomination
{
    /**
     * @var int
     *
     * @ORM\Column(name="nomination_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nominationId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="title", type="text", length=65535, nullable=true)
     */
    private $title;

    /**
     * @var string|null
     *
     * @ORM\Column(name="subtitle", type="text", length=255, nullable=true)
     */
    private $subtitle;

    /**
     * @var int|null
     *
     * @ORM\Column(name="position_id", type="integer", nullable=true)
     */
    private $positionId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="year", type="integer", nullable=true)
     */
    private $year;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="start_date", type="date", nullable=true)
     */
    private $startDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="end_date", type="date", nullable=true)
     */
    private $endDate;

    /**
     * @var string
     *
     * @ORM\Column(name="college_array", type="string", length=100, nullable=false, options={"default"="[]"})
     */
    private $collegeArray = '[]';

    /**
     * @var string
     *
     * @ORM\Column(name="department_array", type="string", length=100, nullable=false, options={"default"="[]"})
     */
    private $departmentArray = '[]';

    /**
     * @var int
     *
     * @ORM\Column(name="number_of_votes", type="integer", nullable=false, options={"default"="1"})
     */
    private $numberOfVotes = '1';

    /**
     * @var float
     *
     * @ORM\Column(name="minimum_fte", type="float", precision=10, scale=0, nullable=false, options={"default"="1"})
     */
    private $minimumFte = '1';

    /**
     * @var int|null
     *
     * @ORM\Column(name="call_number", type="integer", nullable=true)
     */
    private $callNumber;


}
