<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Survey
 *
 * @ORM\Table(name="survey")
 * @ORM\Entity
 */
class Survey
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
     * @var int
     *
     * @ORM\Column(name="survey_type_id", type="integer", nullable=false)
     */
    private $surveyTypeId;

    /**
     * @var int
     *
     * @ORM\Column(name="is_active", type="integer", nullable=false, options={"default"="1"})
     */
    private $isActive = 1;

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

    public function getSurveyTypeId(): ?int
    {
        return $this->surveyTypeId;
    }

    public function setSurveyTypeId(int $surveyTypeId): self
    {
        $this->surveyTypeId = $surveyTypeId;

        return $this;
    }

    public function getIsActive(): ?int
    {
        return $this->isActive;
    }

    public function setIsActive(int $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }


}
