<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Committees
 *
 * @ORM\Table(name="committees")
 * @ORM\Entity
 */
class Committees
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @var string|null
     *
     * @ORM\Column(name="committee_abbr", type="string", length=20, nullable=true)
     */
    private $committeeAbbr;

    /**
     * @var int|null
     *
     * @ORM\Column(name="committee_type", type="integer", nullable=true)
     */
    private $committeeType;

    /**
     * @var bool
     *
     * @ORM\Column(name="display", type="boolean", nullable=false, options={"default"="1"})
     */
    private $display = '1';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="adhoc", type="boolean", nullable=true)
     */
    private $adhoc = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="staff_support", type="string", length=16, nullable=true)
     */
    private $staffSupport;

    /**
     * @var string|null
     *
     * @ORM\Column(name="staff_support_2", type="string", length=16, nullable=true)
     */
    private $staffSupport2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="colleges", type="string", length=50, nullable=true)
     */
    private $colleges;

    /**
     * @var string|null
     *
     * @ORM\Column(name="colleges_2", type="string", length=50, nullable=true)
     */
    private $colleges2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="parent_committee_id", type="integer", nullable=true)
     */
    private $parentCommitteeId = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="administrative", type="boolean", nullable=true)
     */
    private $administrative = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="resource_header", type="text", length=65535, nullable=true)
     */
    private $resourceHeader;

    /**
     * @var string|null
     *
     * @ORM\Column(name="resource", type="text", length=65535, nullable=true)
     */
    private $resource;


}
