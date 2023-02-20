<?php

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait PublishableTrait
{
    #[ORM\Column(type: Types::BOOLEAN, options: ['default' => false])]
    private bool $published = false;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE, nullable: true)]
    private ?\DateTimeInterface $publishedAt = null;

    #[ORM\PrePersist]
    public function initializePublishedAt(): void
    {
        if ($this->published && null === $this->publishedAt) {
            $this->publishedAt = new \DateTimeImmutable();
        }
    }

    public function isPublished(): bool
    {
        return $this->published;
    }

    public function getPublishedAt(): ?\DateTimeInterface
    {
        return $this->publishedAt;
    }

    public function publish(): void
    {
        $this->published = true;
        if (null === $this->publishedAt) {
            $this->publishedAt = new \DateTimeImmutable();
        }
    }

    public function unpublish(): void
    {
        $this->published = false;
    }
}
