<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserValue
 *
 * @ORM\Table(name="user_value")
 * @ORM\Entity
 */
class UserValue
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
     * @var int
     *
     * @ORM\Column(name="value_id", type="integer", nullable=false)
     */
    private $valueId;

    /**
     * @var int
     *
     * @ORM\Column(name="order_id", type="integer", nullable=false)
     */
    private $orderId = '0';

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

    public function getValueId(): ?int
    {
        return $this->valueId;
    }

    public function setValueId(int $valueId): self
    {
        $this->valueId = $valueId;

        return $this;
    }

    public function getOrderId(): ?int
    {
        return $this->orderId;
    }

    public function setOrderId(int $orderId): self
    {
        $this->orderId = $orderId;

        return $this;
    }


}
