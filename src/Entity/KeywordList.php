<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KeywordList
 *
 * @ORM\Table(name="keyword_list")
 * @ORM\Entity
 */
class KeywordList
{
    /**
     * @var int
     *
     * @ORM\Column(name="keyword_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $keywordId;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=16, nullable=false)
     */
    private $username = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="keyword", type="text", length=65535, nullable=true)
     */
    private $keyword;


}
