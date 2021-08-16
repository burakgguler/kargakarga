<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SurveyQuestion
 *
 * @ORM\Table(name="survey_question")
 * @ORM\Entity
 */
class SurveyQuestion
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
     * @ORM\Column(name="name", type="text", length=65535, nullable=false)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var int|null
     *
     * @ORM\Column(name="survey_id", type="integer", nullable=true)
     */
    private $surveyId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="survey_feature_id", type="integer", nullable=false)
     */
    private $surveyFeatureId = '0';

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

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getSurveyId(): ?int
    {
        return $this->surveyId;
    }

    public function setSurveyId(?int $surveyId): self
    {
        $this->surveyId = $surveyId;

        return $this;
    }

    public function getSurveyFeatureId(): ?int
    {
        return $this->surveyFeatureId;
    }

    public function setSurveyFeatureId(int $surveyFeatureId): self
    {
        $this->surveyFeatureId = $surveyFeatureId;

        return $this;
    }


}
