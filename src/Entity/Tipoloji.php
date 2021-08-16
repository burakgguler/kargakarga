<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipoloji
 *
 * @ORM\Table(name="tipoloji")
 * @ORM\Entity
 */
class Tipoloji
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
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="first_calculate", type="integer", nullable=false)
     */
    private $firstCalculate;

    /**
     * @var int
     *
     * @ORM\Column(name="last_calculate", type="integer", nullable=false)
     */
    private $lastCalculate;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getFirstCalculate(): ?int
    {
        return $this->firstCalculate;
    }

    public function setFirstCalculate(int $firstCalculate): self
    {
        $this->firstCalculate = $firstCalculate;

        return $this;
    }

    public function getLastCalculate(): ?int
    {
        return $this->lastCalculate;
    }

    public function setLastCalculate(int $lastCalculate): self
    {
        $this->lastCalculate = $lastCalculate;

        return $this;
    }


}
