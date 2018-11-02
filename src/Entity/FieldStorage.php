<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FieldStorage
 *
 * @ORM\Table(name="field_storage")
 * @ORM\Entity
 */
class FieldStorage
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
     * @ORM\Column(name="form_code", type="string", length=16, nullable=false)
     */
    private $formCode = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="username", type="string", length=16, nullable=true)
     */
    private $username = '';

    /**
     * @var string
     *
     * @ORM\Column(name="field_name", type="string", length=64, nullable=false)
     */
    private $fieldName = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="field_value", type="text", length=16777215, nullable=true)
     */
    private $fieldValue;


}
