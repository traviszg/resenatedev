<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modules
 *
 * @ORM\Table(name="modules", uniqueConstraints={@ORM\UniqueConstraint(name="orderBy", columns={"orderBy"})})
 * @ORM\Entity
 */
class Modules
{
    /**
     * @var int
     *
     * @ORM\Column(name="module_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $moduleId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="module_shorttitle", type="string", length=50, nullable=true)
     */
    private $moduleShorttitle;

    /**
     * @var int|null
     *
     * @ORM\Column(name="orderBy", type="integer", nullable=true)
     */
    private $orderby;

    /**
     * @var string|null
     *
     * @ORM\Column(name="params", type="text", length=255, nullable=true)
     */
    private $params;

    /**
     * @var string|null
     *
     * @ORM\Column(name="module_title", type="string", length=50, nullable=true)
     */
    private $moduleTitle;

    /**
     * @var float|null
     *
     * @ORM\Column(name="version", type="float", precision=10, scale=0, nullable=true)
     */
    private $version;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $isActive = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="is_admin", type="boolean", nullable=false)
     */
    private $isAdmin = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="restrictions", type="string", length=50, nullable=true)
     */
    private $restrictions;

    /**
     * @var string|null
     *
     * @ORM\Column(name="module_file", type="string", length=100, nullable=true)
     */
    private $moduleFile = '';


}
