<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TeamsUser
 *
 * @ORM\Table(name="teams_user")
 * @ORM\Entity
 */
class TeamsUser
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
     * @ORM\Column(name="team_id", type="integer", nullable=false)
     */
    private $teamId;

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
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="is_lead", type="integer", nullable=false)
     */
    private $isLead = '0';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTeamId(): ?int
    {
        return $this->teamId;
    }

    public function setTeamId(int $teamId): self
    {
        $this->teamId = $teamId;

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

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

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


}
