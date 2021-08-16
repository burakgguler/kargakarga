<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserAbilities
 *
 * @ORM\Table(name="user_abilities")
 * @ORM\Entity
 */
class UserAbilities
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
     * @ORM\Column(name="user_id", type="string", length=50, nullable=false)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=50, nullable=false)
     */
    private $content;

    /**
     * @var int
     *
     * @ORM\Column(name="point", type="integer", nullable=false)
     */
    private $point = '0';

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

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getPoint(): ?int
    {
        return $this->point;
    }

    public function setPoint(int $point): self
    {
        $this->point = $point;

        return $this;
    }


}
