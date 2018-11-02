<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ballot
 *
 * @ORM\Table(name="ballot")
 * @ORM\Entity
 */
class Ballot
{
    /**
     * @var string
     *
     * @ORM\Column(name="ballot_code", type="string", length=8, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ballotCode = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="title", type="text", length=65535, nullable=true)
     */
    private $title;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ballot_start", type="date", nullable=false, options={"default"="0000-00-00"})
     */
    private $ballotStart = '0000-00-00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ballot_end", type="date", nullable=false, options={"default"="0000-00-00"})
     */
    private $ballotEnd = '0000-00-00';

    /**
     * @var bool
     *
     * @ORM\Column(name="limit_to_college", type="boolean", nullable=false)
     */
    private $limitToCollege = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="college", type="integer", nullable=false)
     */
    private $college = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="verified_ballot", type="boolean", nullable=false)
     */
    private $verifiedBallot = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ballot_comments", type="text", length=65535, nullable=true)
     */
    private $ballotComments;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text_node", type="string", length=40, nullable=true)
     */
    private $textNode;

    /**
     * @var bool
     *
     * @ORM\Column(name="limit_to_dept", type="boolean", nullable=false)
     */
    private $limitToDept = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="department", type="integer", nullable=false)
     */
    private $department = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="no_display", type="integer", nullable=false)
     */
    private $noDisplay = '0';


}
