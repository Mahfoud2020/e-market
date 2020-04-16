<?php

namespace App\Entity\Admin;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Admin\PageRepository")
 */
class Page
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tite;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $excerpt;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $content;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $parentId;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Admin\PageOption", mappedBy="page")
     */
    private $pageOptions;

    public function __construct()
    {
        $this->pageOptions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTite(): ?string
    {
        return $this->tite;
    }

    public function setTite(string $tite): self
    {
        $this->tite = $tite;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function getExcerpt(): ?string
    {
        return $this->excerpt;
    }

    public function setExcerpt(?string $excerpt): self
    {
        $this->excerpt = $excerpt;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getParentId(): ?int
    {
        return $this->parentId;
    }

    public function setParentId(?int $parentId): self
    {
        $this->parentId = $parentId;

        return $this;
    }

    /**
     * @return Collection|PageOption[]
     */
    public function getPageOptions(): Collection
    {
        return $this->pageOptions;
    }

    public function addPageOption(PageOption $pageOption): self
    {
        if (!$this->pageOptions->contains($pageOption)) {
            $this->pageOptions[] = $pageOption;
            $pageOption->setPage($this);
        }

        return $this;
    }

    public function removePageOption(PageOption $pageOption): self
    {
        if ($this->pageOptions->contains($pageOption)) {
            $this->pageOptions->removeElement($pageOption);
            // set the owning side to null (unless already changed)
            if ($pageOption->getPage() === $this) {
                $pageOption->setPage(null);
            }
        }

        return $this;
    }
}
