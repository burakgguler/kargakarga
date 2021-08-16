<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserMatchCategory
 *
 * @ORM\Table(name="user_match_category")
 * @ORM\Entity
 */
class UserMatchCategory
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
     * @var string
     *
     * @ORM\Column(name="user_id", type="string", length=200, nullable=false)
     */
    private $userId;

    /**
     * @var int
     *
     * @ORM\Column(name="a_category", type="integer", nullable=false)
     */
    private $aCategory;

    /**
     * @var int
     *
     * @ORM\Column(name="a_point", type="integer", nullable=false)
     */
    private $aPoint;

    /**
     * @var int
     *
     * @ORM\Column(name="b_category", type="integer", nullable=false)
     */
    private $bCategory;

    /**
     * @var int
     *
     * @ORM\Column(name="b_point", type="integer", nullable=false)
     */
    private $bPoint;

    /**
     * @var int
     *
     * @ORM\Column(name="c_category", type="integer", nullable=false)
     */
    private $cCategory;

    /**
     * @var int
     *
     * @ORM\Column(name="c_point", type="integer", nullable=false)
     */
    private $cPoint;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId(): ?string
    {
        return $this->userId;
    }

    public function setUserId(string $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getACategory(): ?int
    {
        return $this->aCategory;
    }

    public function setACategory(int $aCategory): self
    {
        $this->aCategory = $aCategory;

        return $this;
    }

    public function getAPoint(): ?int
    {
        return $this->aPoint;
    }

    public function setAPoint(int $aPoint): self
    {
        $this->aPoint = $aPoint;

        return $this;
    }

    public function getBCategory(): ?int
    {
        return $this->bCategory;
    }

    public function setBCategory(int $bCategory): self
    {
        $this->bCategory = $bCategory;

        return $this;
    }

    public function getBPoint(): ?int
    {
        return $this->bPoint;
    }

    public function setBPoint(int $bPoint): self
    {
        $this->bPoint = $bPoint;

        return $this;
    }

    public function getCCategory(): ?int
    {
        return $this->cCategory;
    }

    public function setCCategory(int $cCategory): self
    {
        $this->cCategory = $cCategory;

        return $this;
    }

    public function getCPoint(): ?int
    {
        return $this->cPoint;
    }

    public function setCPoint(int $cPoint): self
    {
        $this->cPoint = $cPoint;

        return $this;
    }


}
