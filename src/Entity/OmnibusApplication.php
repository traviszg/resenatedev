<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OmnibusApplication
 *
 * @ORM\Table(name="omnibus_application")
 * @ORM\Entity
 */
class OmnibusApplication
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
     * @ORM\Column(name="username", type="string", length=16, nullable=true)
     */
    private $username;

    /**
     * @var int|null
     *
     * @ORM\Column(name="step", type="integer", nullable=true)
     */
    private $step;

    /**
     * @var string|null
     *
     * @ORM\Column(name="field_name", type="string", length=50, nullable=true)
     */
    private $fieldName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="field_value", type="text", length=65535, nullable=true)
     */
    private $fieldValue;

    /**
     * @var int|null
     *
     * @ORM\Column(name="year", type="integer", nullable=true)
     */
    private $year;


}
