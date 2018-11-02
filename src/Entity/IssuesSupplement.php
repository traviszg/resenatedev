<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IssuesSupplement
 *
 * @ORM\Table(name="issues_supplement")
 * @ORM\Entity
 */
class IssuesSupplement
{
    /**
     * @var int
     *
     * @ORM\Column(name="supplement_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $supplementId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="issue_id", type="integer", nullable=true)
     */
    private $issueId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="supplement_file_upload_by", type="integer", nullable=true)
     */
    private $supplementFileUploadBy;

    /**
     * @var string|null
     *
     * @ORM\Column(name="supplement_file_hash", type="string", length=256, nullable=true)
     */
    private $supplementFileHash;

    /**
     * @var string|null
     *
     * @ORM\Column(name="supplement_filename", type="string", length=256, nullable=true)
     */
    private $supplementFilename;

    /**
     * @var int|null
     *
     * @ORM\Column(name="size", type="integer", nullable=true)
     */
    private $size;

    /**
     * @var int|null
     *
     * @ORM\Column(name="date", type="integer", nullable=true)
     */
    private $date;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="text", length=65535, nullable=true)
     */
    private $note;


}
