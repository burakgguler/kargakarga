<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PostContent
 *
 * @ORM\Table(name="post_content")
 * @ORM\Entity(repositoryClass="App\Repository\PostContentRepository")
 */
class PostContent
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
     * @ORM\Column(name="name_tr", type="text", length=65535, nullable=false)
     */
    private $nameTr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name_en", type="text", length=65535, nullable=true)
     */
    private $nameEn;

    /**
     * @var int
     *
     * @ORM\Column(name="content_type_id", type="integer", nullable=false)
     */
    private $contentTypeId;

    /**
     * @var int
     *
     * @ORM\Column(name="order", type="integer", nullable=false)
     */
    private $order = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="post_id", type="integer", nullable=false)
     */
    private $postId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    private $url = '';

    /**
     * @var int
     *
     * @ORM\Column(name="width", type="integer", nullable=false)
     */
    private $width = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="height", type="integer", nullable=false)
     */
    private $height = '0';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameTr(): ?string
    {
        return $this->nameTr;
    }

    public function setNameTr(string $nameTr): self
    {
        $this->nameTr = $nameTr;

        return $this;
    }

    public function getNameEn(): ?string
    {
        return $this->nameEn;
    }

    public function setNameEn(?string $nameEn): self
    {
        $this->nameEn = $nameEn;

        return $this;
    }

    public function getContentTypeId(): ?int
    {
        return $this->contentTypeId;
    }

    public function setContentTypeId(int $contentTypeId): self
    {
        $this->contentTypeId = $contentTypeId;

        return $this;
    }

    public function getOrder(): ?int
    {
        return $this->order;
    }

    public function setOrder(int $order): self
    {
        $this->order = $order;

        return $this;
    }

    public function getPostId(): ?int
    {
        return $this->postId;
    }

    public function setPostId(int $postId): self
    {
        $this->postId = $postId;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getWidth(): ?int
    {
        return $this->width;
    }

    public function setWidth(int $width): self
    {
        $this->width = $width;

        return $this;
    }

    public function getHeight(): ?int
    {
        return $this->height;
    }

    public function setHeight(int $height): self
    {
        $this->height = $height;

        return $this;
    }


}
