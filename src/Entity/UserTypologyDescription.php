<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserTypologyDescription
 *
 * @ORM\Table(name="user_typology_description")
 * @ORM\Entity
 */
class UserTypologyDescription
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
     * @var int|null
     *
     * @ORM\Column(name="tipoloji_id", type="integer", nullable=true)
     */
    private $tipolojiId;

    /**
     * @var string
     *
     * @ORM\Column(name="formula", type="string", length=11, nullable=false)
     */
    private $formula;

    /**
     * @var int|null
     *
     * @ORM\Column(name="order", type="integer", nullable=true)
     */
    private $order;

    /**
     * @var string
     *
     * @ORM\Column(name="keys", type="string", length=50, nullable=false)
     */
    private $keys;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tipoloji_sub_id", type="integer", nullable=true)
     */
    private $tipolojiSubId;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=200, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="text", length=65535, nullable=false)
     */
    private $value;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTipolojiId(): ?int
    {
        return $this->tipolojiId;
    }

    public function setTipolojiId(?int $tipolojiId): self
    {
        $this->tipolojiId = $tipolojiId;

        return $this;
    }

    public function getFormula(): ?string
    {
        return $this->formula;
    }

    public function setFormula(string $formula): self
    {
        $this->formula = $formula;

        return $this;
    }

    public function getOrder(): ?int
    {
        return $this->order;
    }

    public function setOrder(?int $order): self
    {
        $this->order = $order;

        return $this;
    }

    public function getKeys(): ?string
    {
        return $this->keys;
    }

    public function setKeys(string $keys): self
    {
        $this->keys = $keys;

        return $this;
    }

    public function getTipolojiSubId(): ?int
    {
        return $this->tipolojiSubId;
    }

    public function setTipolojiSubId(?int $tipolojiSubId): self
    {
        $this->tipolojiSubId = $tipolojiSubId;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(string $value): self
    {
        $this->value = $value;

        return $this;
    }


}
