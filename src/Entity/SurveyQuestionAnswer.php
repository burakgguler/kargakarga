<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SurveyQuestionAnswer
 *
 * @ORM\Table(name="survey_question_answer")
 * @ORM\Entity
 */
class SurveyQuestionAnswer
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
     * @var string|null
     *
     * @ORM\Column(name="user_id", type="string", length=200, nullable=true)
     */
    private $userId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="question_id", type="integer", nullable=true)
     */
    private $questionId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="answer_id", type="integer", nullable=true)
     */
    private $answerId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId(): ?string
    {
        return $this->userId;
    }

    public function setUserId(?string $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getQuestionId(): ?int
    {
        return $this->questionId;
    }

    public function setQuestionId(?int $questionId): self
    {
        $this->questionId = $questionId;

        return $this;
    }

    public function getAnswerId(): ?int
    {
        return $this->answerId;
    }

    public function setAnswerId(?int $answerId): self
    {
        $this->answerId = $answerId;

        return $this;
    }


}
