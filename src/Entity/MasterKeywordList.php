<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MasterKeywordList
 *
 * @ORM\Table(name="master_keyword_list")
 * @ORM\Entity
 */
class MasterKeywordList
{
    /**
     * @var int
     *
     * @ORM\Column(name="master_keyword_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $masterKeywordId;

    /**
     * @var string
     *
     * @ORM\Column(name="keyword_related", type="string", length=160, nullable=false)
     */
    private $keywordRelated = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="master_keyword", type="text", length=65535, nullable=true)
     */
    private $masterKeyword;


}
