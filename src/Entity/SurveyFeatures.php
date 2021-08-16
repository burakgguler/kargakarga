<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SurveyFeatures
 *
 * @ORM\Table(name="survey_features")
 * @ORM\Entity
 */
class SurveyFeatures
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
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var float
     *
     * @ORM\Column(name="norm", type="float", precision=10, scale=0, nullable=false)
     */
    private $norm;

    /**
     * @var float
     *
     * @ORM\Column(name="std", type="float", precision=10, scale=0, nullable=false)
     */
    private $std;

    /**
     * @var int|null
     *
     * @ORM\Column(name="factors_id", type="integer", nullable=true)
     */
    private $factorsId;

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

    public function getNorm(): ?float
    {
        return $this->norm;
    }

    public function setNorm(float $norm): self
    {
        $this->norm = $norm;

        return $this;
    }

    public function getStd(): ?float
    {
        return $this->std;
    }

    public function setStd(float $std): self
    {
        $this->std = $std;

        return $this;
    }

    public function getFactorsId(): ?int
    {
        return $this->factorsId;
    }

    public function setFactorsId(?int $factorsId): self
    {
        $this->factorsId = $factorsId;

        return $this;
    }


}
