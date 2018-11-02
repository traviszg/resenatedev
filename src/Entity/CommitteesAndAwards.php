<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommitteesAndAwards
 *
 * @ORM\Table(name="committees_and_awards", indexes={@ORM\Index(name="committees_and_awards_name", columns={"username"}), @ORM\Index(name="committees_and_awards_year", columns={"year"})})
 * @ORM\Entity
 */
class CommitteesAndAwards
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
     * @var int
     *
     * @ORM\Column(name="year", type="integer", nullable=false)
     */
    private $year = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=16, nullable=false)
     */
    private $username = '';

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="string", length=100, nullable=false)
     */
    private $text = '';


}
