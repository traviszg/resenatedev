<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IssuesTypes
 *
 * @ORM\Table(name="issues_types")
 * @ORM\Entity
 */
class IssuesTypes
{
    /**
     * @var int
     *
     * @ORM\Column(name="issue_type_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $issueTypeId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="issue_type_title", type="string", length=100, nullable=true)
     */
    private $issueTypeTitle;


}
