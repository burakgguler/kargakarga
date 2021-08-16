<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="App\Repository\UsersRepository")
 */
class Users
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
     * @ORM\Column(name="user_id", type="string", length=100, nullable=false)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=200, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=200, nullable=false)
     */
    private $password;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="bio", type="string", length=255, nullable=true)
     */
    private $bio = '';

    /**
     * @var string
     *
     * @ORM\Column(name="fcm_token", type="string", length=255, nullable=false)
     */
    private $fcmToken = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    private $image = '';

    /**
     * @var bool
     *
     * @ORM\Column(name="area_interest_sended", type="boolean", nullable=false)
     */
    private $areaInterestSended = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="value_sended", type="boolean", nullable=false)
     */
    private $valueSended = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="birth_day", type="string", length=50, nullable=true)
     */
    private $birthDay = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="high_school", type="string", length=200, nullable=true)
     */
    private $highSchool = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="education_status", type="string", length=100, nullable=true)
     */
    private $educationStatus = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone_number", type="string", length=20, nullable=true)
     */
    private $phoneNumber = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="university", type="string", length=200, nullable=true)
     */
    private $university = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="department", type="string", length=200, nullable=true)
     */
    private $department = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="faculty", type="string", length=200, nullable=true)
     */
    private $faculty = '';

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

    public function getUserId(): ?string
    {
        return $this->userId;
    }

    public function setUserId(string $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getBio(): ?string
    {
        return $this->bio;
    }

    public function setBio(?string $bio): self
    {
        $this->bio = $bio;

        return $this;
    }

    public function getFcmToken(): ?string
    {
        return $this->fcmToken;
    }

    public function setFcmToken(string $fcmToken): self
    {
        $this->fcmToken = $fcmToken;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getAreaInterestSended(): ?bool
    {
        return $this->areaInterestSended;
    }

    public function setAreaInterestSended(bool $areaInterestSended): self
    {
        $this->areaInterestSended = $areaInterestSended;

        return $this;
    }

    public function getValueSended(): ?bool
    {
        return $this->valueSended;
    }

    public function setValueSended(bool $valueSended): self
    {
        $this->valueSended = $valueSended;

        return $this;
    }

    public function getBirthDay(): ?string
    {
        return $this->birthDay;
    }

    public function setBirthDay(?string $birthDay): self
    {
        $this->birthDay = $birthDay;

        return $this;
    }

    public function getHighSchool(): ?string
    {
        return $this->highSchool;
    }

    public function setHighSchool(?string $highSchool): self
    {
        $this->highSchool = $highSchool;

        return $this;
    }

    public function getEducationStatus(): ?string
    {
        return $this->educationStatus;
    }

    public function setEducationStatus(?string $educationStatus): self
    {
        $this->educationStatus = $educationStatus;

        return $this;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(?string $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    public function getUniversity(): ?string
    {
        return $this->university;
    }

    public function setUniversity(?string $university): self
    {
        $this->university = $university;

        return $this;
    }

    public function getDepartment(): ?string
    {
        return $this->department;
    }

    public function setDepartment(?string $department): self
    {
        $this->department = $department;

        return $this;
    }

    public function getFaculty(): ?string
    {
        return $this->faculty;
    }

    public function setFaculty(?string $faculty): self
    {
        $this->faculty = $faculty;

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
