<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserTipolojiPoint
 *
 * @ORM\Table(name="user_tipoloji_point")
 * @ORM\Entity
 */
class UserTipolojiPoint
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
     * @var float
     *
     * @ORM\Column(name="value", type="float", precision=10, scale=0, nullable=false)
     */
    private $value;

    /**
     * @var int
     *
     * @ORM\Column(name="reault_type_id", type="integer", nullable=false)
     */
    private $reaultTypeId;

    /**
     * @var string
     *
     * @ORM\Column(name="user_id", type="string", length=100, nullable=false)
     */
    private $userId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(float $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function getReaultTypeId(): ?int
    {
        return $this->reaultTypeId;
    }

    public function setReaultTypeId(int $reaultTypeId): self
    {
        $this->reaultTypeId = $reaultTypeId;

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
