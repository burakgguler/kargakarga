<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ValuesItem
 *
 * @ORM\Table(name="values_item")
 * @ORM\Entity
 */
class ValuesItem
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
     * @var int
     *
     * @ORM\Column(name="sub_category_id", type="integer", nullable=false)
     */
    private $subCategoryId;

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

    public function getSubCategoryId(): ?int
    {
        return $this->subCategoryId;
    }

    public function setSubCategoryId(int $subCategoryId): self
    {
        $this->subCategoryId = $subCategoryId;

        return $this;
    }


}
