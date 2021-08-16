<?php

namespace App\Response;

use DateTime;
use JsonSerializable;

class PostResponse implements JsonSerializable
{
    /** @var int */
    private $id;

    /** @var string|null */
    private $cover;

    /** @var string|null */
    private $thumbnail;

    /** @var string */
    private $createdAt;

    /** @var string */
    private $userId;

    /** @var string */
    private $name;

    /** @var string */
    private $title;

    /** @var string */
    private $image;

    /** @var string */
    private $text;

    /** @var bool */
    private $isLike;

    /** @var bool */
    private $isBookmark;

    /** @var int */
    private $likeCount;

    /** @var string|null */
    private $source;

    /** @var array|null */
    private $content;

    /** @var array|null */
    private $threeLikes;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return PostResponse
     */
    public function setId(int $id): PostResponse
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCover(): ?string
    {
        return $this->cover;
    }

    /**
     * @param string|null $cover
     * @return PostResponse
     */
    public function setCover(?string $cover): PostResponse
    {
        $this->cover = $cover;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getThumbnail(): ?string
    {
        return $this->thumbnail;
    }

    /**
     * @param string|null $thumbnail
     * @return PostResponse
     */
    public function setThumbnail(?string $thumbnail): PostResponse
    {
        $this->thumbnail = $thumbnail;
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
     * @return PostResponse
     */
    public function setCreatedAt(string $createdAt): PostResponse
    {
        $this->createdAt = $createdAt;
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
     * @return PostResponse
     */
    public function setUserId(string $userId): PostResponse
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
     * @return PostResponse
     */
    public function setName(string $name): PostResponse
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
     * @return PostResponse
     */
    public function setTitle(string $title): PostResponse
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
     * @return PostResponse
     */
    public function setImage(string $image): PostResponse
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     * @return PostResponse
     */
    public function setText(string $text): PostResponse
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @return bool
     */
    public function isLike(): bool
    {
        return $this->isLike;
    }

    /**
     * @param bool $isLike
     * @return PostResponse
     */
    public function setIsLike(bool $isLike): PostResponse
    {
        $this->isLike = $isLike;
        return $this;
    }

    /**
     * @return bool
     */
    public function isBookmark(): bool
    {
        return $this->isBookmark;
    }

    /**
     * @param bool $isBookmark
     * @return PostResponse
     */
    public function setIsBookmark(bool $isBookmark): PostResponse
    {
        $this->isBookmark = $isBookmark;
        return $this;
    }

    /**
     * @return int
     */
    public function getLikeCount(): int
    {
        return $this->likeCount;
    }

    /**
     * @param int $likeCount
     * @return PostResponse
     */
    public function setLikeCount(int $likeCount): PostResponse
    {
        $this->likeCount = $likeCount;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * @param string|null $source
     * @return PostResponse
     */
    public function setSource(?string $source): PostResponse
    {
        $this->source = $source;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getContent(): ?array
    {
        return $this->content;
    }

    /**
     * @param array|null $content
     * @return PostResponse
     */
    public function setContent(?array $content): PostResponse
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getThreeLikes(): ?array
    {
        return $this->threeLikes;
    }

    /**
     * @param array|null $threeLikes
     * @return PostResponse
     */
    public function setThreeLikes(?array $threeLikes): PostResponse
    {
        $this->threeLikes = $threeLikes;
        return $this;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}