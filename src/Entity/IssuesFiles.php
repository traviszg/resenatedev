<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IssuesFiles
 *
 * @ORM\Table(name="issues_files", indexes={@ORM\Index(name="issue_id", columns={"issue_id"}), @ORM\Index(name="issue_file_uploaded_by", columns={"issue_file_uploaded_by"}), @ORM\Index(name="issues_files_ibfk_2", columns={"issue_comm_id"})})
 * @ORM\Entity
 */
class IssuesFiles
{
    /**
     * @var int
     *
     * @ORM\Column(name="issue_file_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $issueFileId;

    /**
     * @var int
     *
     * @ORM\Column(name="notification_email", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $notificationEmail = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="issue_comm_id", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $issueCommId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="issue_file_filename", type="string", length=256, nullable=true)
     */
    private $issueFileFilename;

    /**
     * @var string|null
     *
     * @ORM\Column(name="issue_file_hash", type="string", length=256, nullable=true)
     */
    private $issueFileHash;

    /**
     * @var int
     *
     * @ORM\Column(name="issue_file_size", type="integer", nullable=false)
     */
    private $issueFileSize = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="issue_file_type", type="string", length=0, nullable=false, options={"default"="Final Response"})
     */
    private $issueFileType = 'Final Response';

    /**
     * @var string|null
     *
     * @ORM\Column(name="issue_file_notes", type="text", length=65535, nullable=true)
     */
    private $issueFileNotes;

    /**
     * @var bool
     *
     * @ORM\Column(name="issue_file_ready", type="boolean", nullable=false)
     */
    private $issueFileReady = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="issue_file_uploaded_date", type="datetime", nullable=false)
     */
    private $issueFileUploadedDate;

    /**
     * @var int
     *
     * @ORM\Column(name="issue_file_num_pages", type="integer", nullable=false, options={"default"="1"})
     */
    private $issueFileNumPages = '1';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $timestamp = 'CURRENT_TIMESTAMP';

    /**
     * @var \Issues
     *
     * @ORM\ManyToOne(targetEntity="Issues")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="issue_id", referencedColumnName="issue_id")
     * })
     */
    private $issue;

    /**
     * @var \UserInfoList
     *
     * @ORM\ManyToOne(targetEntity="UserInfoList")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="issue_file_uploaded_by", referencedColumnName="user_id")
     * })
     */
    private $issueFileUploadedBy;


}
