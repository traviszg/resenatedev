<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PpsDepartmentList
 *
 * @ORM\Table(name="pps_department_list")
 * @ORM\Entity
 */
class PpsDepartmentList
{
    /**
     * @var int
     *
     * @ORM\Column(name="department_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $departmentId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="org", type="string", length=11, nullable=true)
     */
    private $org;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dept", type="string", length=11, nullable=true)
     */
    private $dept;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dept_description", type="string", length=50, nullable=true)
     */
    private $deptDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="custom_title", type="string", length=50, nullable=true)
     */
    private $customTitle;


}
