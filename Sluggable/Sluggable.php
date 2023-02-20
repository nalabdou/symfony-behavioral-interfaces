<?php

interface Sluggable
{
    public function getSlug(): string;

    public function setSlug(string $slug): void;
}
