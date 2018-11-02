<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DepartmentList
 *
 * @ORM\Table(name="department_list")
 * @ORM\Entity
 */
class DepartmentList
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
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=64, nullable=false)
     */
    private $title = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="analyst", type="string", length=256, nullable=true)
     */
    private $analyst;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountno", type="string", length=6, nullable=true)
     */
    private $accountno;

    /**
     * @var string|null
     *
     * @ORM\Column(name="deptno", type="string", length=11, nullable=true)
     */
    private $deptno;

    /**
     * @var string|null
     *
     * @ORM\Column(name="orgno", type="string", length=11, nullable=true)
     */
    private $orgno;


}
