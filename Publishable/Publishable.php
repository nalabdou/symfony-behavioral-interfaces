<?php

interface Publishable
{
    public function isPublished(): bool;

    public function getPublishedAt(): ?\DateTimeInterface;

    public function publish(): void;

    public function unpublish(): void;
}
