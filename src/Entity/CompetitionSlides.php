<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompetitionSlides
 *
 * @ORM\Table(name="competition_slides")
 * @ORM\Entity
 */
class CompetitionSlides
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="competition_id", type="integer", nullable=false)
     */
    private $competitionId;

    /**
     * @var string
     *
     * @ORM\Column(name="x_image", type="string", length=200, nullable=false)
     */
    private $xImage;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=200, nullable=false)
     */
    private $image;

    /**
     * @var int
     *
     * @ORM\Column(name="order_no", type="integer", nullable=false)
     */
    private $orderNo;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCompetitionId(): ?int
    {
        return $this->competitionId;
    }

    public function setCompetitionId(int $competitionId): self
    {
        $this->competitionId = $competitionId;

        return $this;
    }

    public function getXImage(): ?string
    {
        return $this->xImage;
    }

    public function setXImage(string $xImage): self
    {
        $this->xImage = $xImage;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getOrderNo(): ?int
    {
        return $this->orderNo;
    }

    public function setOrderNo(int $orderNo): self
    {
        $this->orderNo = $orderNo;

        return $this;
    }


}
