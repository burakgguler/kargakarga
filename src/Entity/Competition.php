<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Competition
 *
 * @ORM\Table(name="competition")
 * @ORM\Entity
 */
class Competition
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
     * @ORM\Column(name="image_url", type="string", length=255, nullable=false)
     */
    private $imageUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="content_title", type="string", length=255, nullable=false)
     */
    private $contentTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="sub_title", type="string", length=255, nullable=false)
     */
    private $subTitle;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_active", type="boolean", nullable=false)
     */
    private $isActive;

    /**
     * @var int
     *
     * @ORM\Column(name="user_limit", type="integer", nullable=false)
     */
    private $userLimit;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    public function setImageUrl(string $imageUrl): self
    {
        $this->imageUrl = $imageUrl;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getContentTitle(): ?string
    {
        return $this->contentTitle;
    }

    public function setContentTitle(string $contentTitle): self
    {
        $this->contentTitle = $contentTitle;

        return $this;
    }

    public function getSubTitle(): ?string
    {
        return $this->subTitle;
    }

    public function setSubTitle(string $subTitle): self
    {
        $this->subTitle = $subTitle;

        return $this;
    }

    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

    public function getUserLimit(): ?int
    {
        return $this->userLimit;
    }

    public function setUserLimit(int $userLimit): self
    {
        $this->userLimit = $userLimit;

        return $this;
    }


}
