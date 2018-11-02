<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CallForNominations
 *
 * @ORM\Table(name="call_for_nominations")
 * @ORM\Entity
 */
class CallForNominations
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="college", type="integer", nullable=false)
     */
    private $college = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="limit_to_college", type="boolean", nullable=false)
     */
    private $limitToCollege = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_date", type="date", nullable=false, options={"default"="0000-00-00"})
     */
    private $startDate = '0000-00-00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_date", type="date", nullable=false, options={"default"="0000-00-00"})
     */
    private $endDate = '0000-00-00';

    /**
     * @var int|null
     *
     * @ORM\Column(name="year", type="integer", nullable=true, options={"default"="2015"})
     */
    private $year = '2015';

    /**
     * @var string|null
     *
     * @ORM\Column(name="title", type="text", length=65535, nullable=true)
     */
    private $title;

    /**
     * @var string|null
     *
     * @ORM\Column(name="subtitle", type="text", length=65535, nullable=true)
     */
    private $subtitle;

    /**
     * @var bool
     *
     * @ORM\Column(name="limit_to_department", type="boolean", nullable=false)
     */
    private $limitToDepartment = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="department", type="integer", nullable=false)
     */
    private $department = '0';

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


}
