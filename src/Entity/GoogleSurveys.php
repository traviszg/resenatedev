<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GoogleSurveys
 *
 * @ORM\Table(name="google_surveys")
 * @ORM\Entity
 */
class GoogleSurveys
{
    /**
     * @var int
     *
     * @ORM\Column(name="g_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $gId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="poll_id", type="integer", nullable=true)
     */
    private $pollId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="username", type="string", length=50, nullable=true)
     */
    private $username;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $timestamp = 'CURRENT_TIMESTAMP';


}
