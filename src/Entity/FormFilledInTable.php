<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FormFilledInTable
 *
 * @ORM\Table(name="form_filled_in_table")
 * @ORM\Entity
 */
class FormFilledInTable
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
     * @ORM\Column(name="form_code", type="string", length=8, nullable=false)
     */
    private $formCode = '';

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=16, nullable=false)
     */
    private $username = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="form_saved", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $formSaved = 'CURRENT_TIMESTAMP';


}
