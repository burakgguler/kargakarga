<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserFactorsType
 *
 * @ORM\Table(name="user_factors_type")
 * @ORM\Entity
 */
class UserFactorsType
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
     * @ORM\Column(name="factors_type_id", type="integer", nullable=false)
     */
    private $factorsTypeId;

    /**
     * @var string
     *
     * @ORM\Column(name="user_id", type="string", length=50, nullable=false)
     */
    private $userId;

    /**
     * @var int
     *
     * @ORM\Column(name="value", type="integer", nullable=false)
     */
    private $value;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFactorsTypeId(): ?int
    {
        return $this->factorsTypeId;
    }

    public function setFactorsTypeId(int $factorsTypeId): self
    {
        $this->factorsTypeId = $factorsTypeId;

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

    public function getValue(): ?int
    {
        return $this->value;
    }

    public function setValue(int $value): self
    {
        $this->value = $value;

        return $this;
    }


}
