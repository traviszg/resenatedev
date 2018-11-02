<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Leaves
 *
 * @ORM\Table(name="leaves")
 * @ORM\Entity
 */
class Leaves
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
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=16, nullable=false)
     */
    private $username = '';

    /**
     * @var int
     *
     * @ORM\Column(name="year", type="integer", nullable=false, options={"default"="2015"})
     */
    private $year = '2015';

    /**
     * @var bool
     *
     * @ORM\Column(name="pay_percentage", type="boolean", nullable=false, options={"default"="100"})
     */
    private $payPercentage = '100';

    /**
     * @var string
     *
     * @ORM\Column(name="leave_type", type="string", length=0, nullable=false, options={"default"="sabbatical"})
     */
    private $leaveType = 'sabbatical';

    /**
     * @var bool
     *
     * @ORM\Column(name="fall", type="boolean", nullable=false)
     */
    private $fall = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="winter", type="boolean", nullable=false)
     */
    private $winter = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="spring", type="boolean", nullable=false)
     */
    private $spring = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="summer", type="boolean", nullable=false)
     */
    private $summer = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $timestamp = 'CURRENT_TIMESTAMP';


}
