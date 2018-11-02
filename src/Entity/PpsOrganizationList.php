<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PpsOrganizationList
 *
 * @ORM\Table(name="pps_organization_list")
 * @ORM\Entity
 */
class PpsOrganizationList
{
    /**
     * @var int
     *
     * @ORM\Column(name="org_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $orgId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="org", type="string", length=11, nullable=true)
     */
    private $org;

    /**
     * @var string|null
     *
     * @ORM\Column(name="org_description", type="string", length=50, nullable=true)
     */
    private $orgDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="custom_title", type="string", length=50, nullable=true)
     */
    private $customTitle;


}
