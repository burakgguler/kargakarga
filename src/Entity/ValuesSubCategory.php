<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ValuesSubCategory
 *
 * @ORM\Table(name="values_sub_category")
 * @ORM\Entity
 */
class ValuesSubCategory
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
     * @ORM\Column(name="name", type="string", length=200, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="survey_name", type="string", length=200, nullable=false)
     */
    private $surveyName;

    /**
     * @var int
     *
     * @ORM\Column(name="category_id", type="integer", nullable=false)
     */
    private $categoryId;

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

    public function getSurveyName(): ?string
    {
        return $this->surveyName;
    }

    public function setSurveyName(string $surveyName): self
    {
        $this->surveyName = $surveyName;

        return $this;
    }

    public function getCategoryId(): ?int
    {
        return $this->categoryId;
    }

    public function setCategoryId(int $categoryId): self
    {
        $this->categoryId = $categoryId;

        return $this;
    }


}
