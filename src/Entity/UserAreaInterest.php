<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserAreaInterest
 *
 * @ORM\Table(name="user_area_interest")
 * @ORM\Entity
 */
class UserAreaInterest
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
     * @var int
     *
     * @ORM\Column(name="area_interest_id", type="integer", nullable=false)
     */
    private $areaInterestId;

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

    public function getAreaInterestId(): ?int
    {
        return $this->areaInterestId;
    }

    public function setAreaInterestId(int $areaInterestId): self
    {
        $this->areaInterestId = $areaInterestId;

        return $this;
    }


}
