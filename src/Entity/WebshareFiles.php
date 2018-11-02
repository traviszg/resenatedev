<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WebshareFiles
 *
 * @ORM\Table(name="webshare_files", indexes={@ORM\Index(name="ticket", columns={"ticket"})})
 * @ORM\Entity
 */
class WebshareFiles
{
    /**
     * @var int
     *
     * @ORM\Column(name="file_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fileId;

    /**
     * @var string
     *
     * @ORM\Column(name="fileHash", type="string", length=100, nullable=false)
     */
    private $filehash = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="fileName", type="string", length=100, nullable=true)
     */
    private $filename;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fileSize", type="bigint", nullable=true)
     */
    private $filesize;

    /**
     * @var int
     *
     * @ORM\Column(name="downloaded", type="integer", nullable=false)
     */
    private $downloaded = '0';

    /**
     * @var \Webshare
     *
     * @ORM\ManyToOne(targetEntity="Webshare")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ticket", referencedColumnName="ticket")
     * })
     */
    private $ticket;


}
