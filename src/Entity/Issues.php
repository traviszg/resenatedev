<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Issues
 *
 * @ORM\Table(name="issues")
 * @ORM\Entity
 */
class Issues
{
    /**
     * @var int
     *
     * @ORM\Column(name="issue_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $issueId;

    /**
     * @var int
     *
     * @ORM\Column(name="year", type="integer", nullable=false)
     */
    private $year;

    /**
     * @var string|null
     *
     * @ORM\Column(name="issue_title", type="string", length=256, nullable=true)
     */
    private $issueTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="issue_type", type="string", length=0, nullable=false)
     */
    private $issueType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="issue_subtype", type="integer", nullable=true)
     */
    private $issueSubtype;

    /**
     * @var int
     *
     * @ORM\Column(name="issue_status", type="integer", nullable=false)
     */
    private $issueStatus = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="public", type="integer", nullable=false)
     */
    private $public = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="received", type="date", nullable=false)
     */
    private $received;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sent_for_review", type="date", nullable=true)
     */
    private $sentForReview;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="internal_due_date", type="datetime", nullable=true)
     */
    private $internalDueDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="external_due_date", type="datetime", nullable=true)
     */
    private $externalDueDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="background_notes", type="text", length=65535, nullable=true)
     */
    private $backgroundNotes;

    /**
     * @var string|null
     *
     * @ORM\Column(name="analyst_notes", type="text", length=65535, nullable=true)
     */
    private $analystNotes;


}
