<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipolojiResultValue
 *
 * @ORM\Table(name="tipoloji_result_value")
 * @ORM\Entity
 */
class TipolojiResultValue
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
     * @ORM\Column(name="tipoloji_id", type="integer", nullable=false)
     */
    private $tipolojiId;

    /**
     * @var int
     *
     * @ORM\Column(name="tipoloji_sub_id", type="integer", nullable=false)
     */
    private $tipolojiSubId;

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

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTipolojiId(): ?int
    {
        return $this->tipolojiId;
    }

    public function setTipolojiId(int $tipolojiId): self
    {
        $this->tipolojiId = $tipolojiId;

        return $this;
    }

    public function getTipolojiSubId(): ?int
    {
        return $this->tipolojiSubId;
    }

    public function setTipolojiSubId(int $tipolojiSubId): self
    {
        $this->tipolojiSubId = $tipolojiSubId;

        return $this;
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


}
