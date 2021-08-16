<?php

namespace App\Response;

use JsonSerializable;

class ThreeLikesResponse implements JsonSerializable
{
    /** @var int */
    private $id;

    /** @var string */
    private $userId;

    /** @var string */
    private $name;

    /** @var string */
    private $title;

    /** @var string */
    private $image;

    /** @var string */
    private $createdAt;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return ThreeLikesResponse
     */
    public function setId(int $id): ThreeLikesResponse
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserId(): string
    {
        return $this->userId;
    }

    /**
     * @param string $userId
     * @return ThreeLikesResponse
     */
    public function setUserId(string $userId): ThreeLikesResponse
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return ThreeLikesResponse
     */
    public function setName(string $name): ThreeLikesResponse
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return ThreeLikesResponse
     */
    public function setTitle(string $title): ThreeLikesResponse
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param string $image
     * @return ThreeLikesResponse
     */
    public function setImage(string $image): ThreeLikesResponse
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    /**
     * @param string $createdAt
     * @return ThreeLikesResponse
     */
    public function setCreatedAt(string $createdAt): ThreeLikesResponse
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}