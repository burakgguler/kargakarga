<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MatchImageInfo
 *
 * @ORM\Table(name="match_image_info")
 * @ORM\Entity
 */
class MatchImageInfo
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
     * @ORM\Column(name="sub_category_id", type="integer", nullable=false)
     */
    private $subCategoryId;

    /**
     * @var float
     *
     * @ORM\Column(name="x", type="float", precision=10, scale=0, nullable=false)
     */
    private $x;

    /**
     * @var float
     *
     * @ORM\Column(name="y", type="float", precision=10, scale=0, nullable=false)
     */
    private $y;

    /**
     * @var int
     *
     * @ORM\Column(name="order_id", type="integer", nullable=false)
     */
    private $orderId = '0';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSubCategoryId(): ?int
    {
        return $this->subCategoryId;
    }

    public function setSubCategoryId(int $subCategoryId): self
    {
        $this->subCategoryId = $subCategoryId;

        return $this;
    }

    public function getX(): ?float
    {
        return $this->x;
    }

    public function setX(float $x): self
    {
        $this->x = $x;

        return $this;
    }

    public function getY(): ?float
    {
        return $this->y;
    }

    public function setY(float $y): self
    {
        $this->y = $y;

        return $this;
    }

    public function getOrderId(): ?int
    {
        return $this->orderId;
    }

    public function setOrderId(int $orderId): self
    {
        $this->orderId = $orderId;

        return $this;
    }


}
