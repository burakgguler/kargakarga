<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Follow
 *
 * @ORM\Table(name="follow")
 * @ORM\Entity
 */
class Follow
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
     * @ORM\Column(name="follower", type="string", length=100, nullable=false)
     */
    private $follower;

    /**
     * @var string
     *
     * @ORM\Column(name="follow", type="string", length=100, nullable=false)
     */
    private $follow;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $updatedAt = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $createdAt = 'CURRENT_TIMESTAMP';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFollower(): ?string
    {
        return $this->follower;
    }

    public function setFollower(string $follower): self
    {
        $this->follower = $follower;

        return $this;
    }

    public function getFollow(): ?string
    {
        return $this->follow;
    }

    public function setFollow(string $follow): self
    {
        $this->follow = $follow;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }


}
