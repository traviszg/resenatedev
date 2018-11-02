<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommitteeExtras
 *
 * @ORM\Table(name="committee_extras")
 * @ORM\Entity
 */
class CommitteeExtras
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
     * @var string|null
     *
     * @ORM\Column(name="extra_item", type="string", length=255, nullable=true)
     */
    private $extraItem;

    /**
     * @var int
     *
     * @ORM\Column(name="committee_id", type="integer", nullable=false)
     */
    private $committeeId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="year", type="integer", nullable=false)
     */
    private $year = '0';


}
