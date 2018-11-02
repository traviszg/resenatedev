<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reports
 *
 * @ORM\Table(name="reports")
 * @ORM\Entity
 */
class Reports
{
    /**
     * @var int
     *
     * @ORM\Column(name="report_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $reportId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="report_name", type="string", length=50, nullable=true)
     */
    private $reportName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="report_type", type="string", length=0, nullable=true)
     */
    private $reportType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="report_table_name", type="string", length=50, nullable=true)
     */
    private $reportTableName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="report_relationships", type="text", length=65535, nullable=true)
     */
    private $reportRelationships;

    /**
     * @var string|null
     *
     * @ORM\Column(name="report", type="text", length=65535, nullable=true)
     */
    private $report;


}
