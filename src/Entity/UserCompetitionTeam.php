<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserCompetitionTeam
 *
 * @ORM\Table(name="user_competition_team")
 * @ORM\Entity
 */
class UserCompetitionTeam
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
     * @ORM\Column(name="user_competition_id", type="integer", nullable=false)
     */
    private $userCompetitionId;

    /**
     * @var string
     *
     * @ORM\Column(name="user_id", type="string", length=50, nullable=false)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", length=65535, nullable=false)
     */
    private $content;

    /**
     * @var int
     *
     * @ORM\Column(name="slot_index", type="integer", nullable=false)
     */
    private $slotIndex;

    /**
     * @var int
     *
     * @ORM\Column(name="is_lead", type="integer", nullable=false)
     */
    private $isLead = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status = '0';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserCompetitionId(): ?int
    {
        return $this->userCompetitionId;
    }

    public function setUserCompetitionId(int $userCompetitionId): self
    {
        $this->userCompetitionId = $userCompetitionId;

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

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getSlotIndex(): ?int
    {
        return $this->slotIndex;
    }

    public function setSlotIndex(int $slotIndex): self
    {
        $this->slotIndex = $slotIndex;

        return $this;
    }

    public function getIsLead(): ?int
    {
        return $this->isLead;
    }

    public function setIsLead(int $isLead): self
    {
        $this->isLead = $isLead;

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


}
