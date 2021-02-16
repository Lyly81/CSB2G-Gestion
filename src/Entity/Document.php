<?php

namespace App\Entity;

use App\Repository\DocumentRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=DocumentRepository::class)
 */
class Document
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateDocument;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateDeadline;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $designation;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $amount;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $onePart;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $thirdPart;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $url;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getDateDocument(): ?\DateTimeInterface
    {
        return $this->dateDocument;
    }

    public function setDateDocument(\DateTimeInterface $dateDocument): self
    {
        $this->dateDocument = $dateDocument;

        return $this;
    }

    public function getDateDeadline(): ?\DateTimeInterface
    {
        return $this->dateDeadline;
    }

    public function setDateDeadline(?\DateTimeInterface $dateDeadline): self
    {
        $this->dateDeadline = $dateDeadline;

        return $this;
    }

    public function getDesignation(): ?string
    {
        return $this->designation;
    }

    public function setDesignation(string $designation): self
    {
        $this->designation = $designation;

        return $this;
    }

    public function getAmount(): ?float
    {
        return $this->amount;
    }

    public function setAmount(?float $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getOnePart(): ?float
    {
        return $this->onePart;
    }

    public function setOnePart(?float $onePart): self
    {
        $this->onePart = $onePart;

        return $this;
    }

    public function getThirdPart(): ?float
    {
        return $this->thirdPart;
    }

    public function setThirdPart(float $thirdPart): self
    {
        $this->thirdPart = $thirdPart;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }
}
