<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserUniversity
 *
 * @ORM\Table(name="user_university")
 * @ORM\Entity
 */
class UserUniversity
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
     * @ORM\Column(name="user_id", type="string", length=20, nullable=false)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=200, nullable=false)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="university_id", type="integer", nullable=false)
     */
    private $universityId;

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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getUniversityId(): ?int
    {
        return $this->universityId;
    }

    public function setUniversityId(int $universityId): self
    {
        $this->universityId = $universityId;

        return $this;
    }


}
