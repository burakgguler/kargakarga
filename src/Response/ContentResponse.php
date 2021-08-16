<?php

namespace App\Response;

use JsonSerializable;

class ContentResponse implements JsonSerializable
{
    /** @var int */
    private $id;

    /** @var string */
    private $name;

    /** @var string */
    private $contentType;

    /** @var int */
    private $order;

    /** @var string|null */
    private $url;

    /** @var int|null */
    private $width;

    /** @var int|null */
    private $height;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return ContentResponse
     */
    public function setId(int $id): ContentResponse
    {
        $this->id = $id;
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
     * @return ContentResponse
     */
    public function setName(string $name): ContentResponse
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getContentType(): string
    {
        return $this->contentType;
    }

    /**
     * @param string $contentType
     * @return ContentResponse
     */
    public function setContentType(string $contentType): ContentResponse
    {
        $this->contentType = $contentType;
        return $this;
    }

    /**
     * @return int
     */
    public function getOrder(): int
    {
        return $this->order;
    }

    /**
     * @param int $order
     * @return ContentResponse
     */
    public function setOrder(int $order): ContentResponse
    {
        $this->order = $order;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @param string|null $url
     * @return ContentResponse
     */
    public function setUrl(?string $url): ContentResponse
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getWidth(): ?int
    {
        return $this->width;
    }

    /**
     * @param int|null $width
     * @return ContentResponse
     */
    public function setWidth(?int $width): ContentResponse
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getHeight(): ?int
    {
        return $this->height;
    }

    /**
     * @param int|null $height
     * @return ContentResponse
     */
    public function setHeight(?int $height): ContentResponse
    {
        $this->height = $height;
        return $this;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}