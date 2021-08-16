<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserProfileEducation
 *
 * @ORM\Table(name="user_profile_education")
 * @ORM\Entity
 */
class UserProfileEducation
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
     * @ORM\Column(name="university", type="integer", nullable=false)
     */
    private $university;

    /**
     * @var int
     *
     * @ORM\Column(name="faculty", type="integer", nullable=false)
     */
    private $faculty;

    /**
     * @var int
     *
     * @ORM\Column(name="section", type="integer", nullable=false)
     */
    private $section;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="user_id", type="string", length=25, nullable=false)
     */
    private $userId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUniversity(): ?int
    {
        return $this->university;
    }

    public function setUniversity(int $university): self
    {
        $this->university = $university;

        return $this;
    }

    public function getFaculty(): ?int
    {
        return $this->faculty;
    }

    public function setFaculty(int $faculty): self
    {
        $this->faculty = $faculty;

        return $this;
    }

    public function getSection(): ?int
    {
        return $this->section;
    }

    public function setSection(int $section): self
    {
        $this->section = $section;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

        return $this;
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


}
