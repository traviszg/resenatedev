<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommitteeTypes
 *
 * @ORM\Table(name="committee_types")
 * @ORM\Entity
 */
class CommitteeTypes
{
    /**
     * @var int
     *
     * @ORM\Column(name="committee_type_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $committeeTypeId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="committee_type", type="string", length=50, nullable=true)
     */
    private $committeeType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="committee_type_title", type="string", length=50, nullable=true)
     */
    private $committeeTypeTitle = '';


}
