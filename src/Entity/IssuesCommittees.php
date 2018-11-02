<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IssuesCommittees
 *
 * @ORM\Table(name="issues_committees", indexes={@ORM\Index(name="issue_id", columns={"issue_id"}), @ORM\Index(name="issues_committees_ibfk_2", columns={"committee_id"})})
 * @ORM\Entity
 */
class IssuesCommittees
{
    /**
     * @var int
     *
     * @ORM\Column(name="issue_comm_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $issueCommId;

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
     * @var \Committees
     *
     * @ORM\ManyToOne(targetEntity="Committees")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="committee_id", referencedColumnName="id")
     * })
     */
    private $committee;


}
