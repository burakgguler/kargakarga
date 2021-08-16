<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kvkk
 *
 * @ORM\Table(name="kvkk")
 * @ORM\Entity
 */
class Kvkk
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
     * @ORM\Column(name="kvkk", type="text", length=0, nullable=false)
     */
    private $kvkk;

    /**
     * @var string
     *
     * @ORM\Column(name="kvkk_riza", type="text", length=0, nullable=false)
     */
    private $kvkkRiza;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getKvkk(): ?string
    {
        return $this->kvkk;
    }

    public function setKvkk(string $kvkk): self
    {
        $this->kvkk = $kvkk;

        return $this;
    }

    public function getKvkkRiza(): ?string
    {
        return $this->kvkkRiza;
    }

    public function setKvkkRiza(string $kvkkRiza): self
    {
        $this->kvkkRiza = $kvkkRiza;

        return $this;
    }


}
