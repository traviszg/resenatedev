<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RoleList
 *
 * @ORM\Table(name="role_list")
 * @ORM\Entity
 */
class RoleList
{
    /**
     * @var int
     *
     * @ORM\Column(name="role_number", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $roleNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="role_title", type="string", length=30, nullable=false)
     */
    private $roleTitle = '';

    /**
     * @var bool
     *
     * @ORM\Column(name="is_admin", type="boolean", nullable=false)
     */
    private $isAdmin = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="is_professor", type="boolean", nullable=false)
     */
    private $isProfessor = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="is_voter", type="boolean", nullable=false)
     */
    private $isVoter = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="is_reader", type="boolean", nullable=false)
     */
    private $isReader = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="is_cal_editor", type="boolean", nullable=false)
     */
    private $isCalEditor = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="is_supperadmin", type="boolean", nullable=false)
     */
    private $isSupperadmin = '0';


}
