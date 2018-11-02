<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GrantsReviews
 *
 * @ORM\Table(name="grants_reviews")
 * @ORM\Entity
 */
class GrantsReviews
{
    /**
     * @var int
     *
     * @ORM\Column(name="grants_review_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $grantsReviewId;

    /**
     * @var int
     *
     * @ORM\Column(name="grants_app_id", type="integer", nullable=false)
     */
    private $grantsAppId;

    /**
     * @var int
     *
     * @ORM\Column(name="reviewer_user_id", type="integer", nullable=false)
     */
    private $reviewerUserId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="score", type="integer", nullable=true)
     */
    private $score;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comments", type="text", length=65535, nullable=true)
     */
    private $comments;

    /**
     * @var int
     *
     * @ORM\Column(name="final_review", type="integer", nullable=false)
     */
    private $finalReview = '0';


}
