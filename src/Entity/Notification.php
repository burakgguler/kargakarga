<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notification
 *
 * @ORM\Table(name="notification")
 * @ORM\Entity
 */
class Notification
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
     * @ORM\Column(name="target_user", type="string", length=50, nullable=false)
     */
    private $targetUser;

    /**
     * @var string
     *
     * @ORM\Column(name="source_user", type="string", length=50, nullable=false)
     */
    private $sourceUser;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="string", length=255, nullable=false)
     */
    private $message;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_viewed", type="boolean", nullable=false)
     */
    private $isViewed = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="action_type", type="string", length=50, nullable=false)
     */
    private $actionType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="item_id", type="string", length=50, nullable=true)
     */
    private $itemId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $created = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $updated = 'CURRENT_TIMESTAMP';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTargetUser(): ?string
    {
        return $this->targetUser;
    }

    public function setTargetUser(string $targetUser): self
    {
        $this->targetUser = $targetUser;

        return $this;
    }

    public function getSourceUser(): ?string
    {
        return $this->sourceUser;
    }

    public function setSourceUser(string $sourceUser): self
    {
        $this->sourceUser = $sourceUser;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getIsViewed(): ?bool
    {
        return $this->isViewed;
    }

    public function setIsViewed(bool $isViewed): self
    {
        $this->isViewed = $isViewed;

        return $this;
    }

    public function getActionType(): ?string
    {
        return $this->actionType;
    }

    public function setActionType(string $actionType): self
    {
        $this->actionType = $actionType;

        return $this;
    }

    public function getItemId(): ?string
    {
        return $this->itemId;
    }

    public function setItemId(?string $itemId): self
    {
        $this->itemId = $itemId;

        return $this;
    }

    public function getCreated(): ?\DateTimeInterface
    {
        return $this->created;
    }

    public function setCreated(\DateTimeInterface $created): self
    {
        $this->created = $created;

        return $this;
    }

    public function getUpdated(): ?\DateTimeInterface
    {
        return $this->updated;
    }

    public function setUpdated(\DateTimeInterface $updated): self
    {
        $this->updated = $updated;

        return $this;
    }


}
