<?php

interface Timestampable
{
    public function getCreatedAt(): \DateTimeInterface;

    public function setCreatedAt(): void;

    public function getUpdatedAt(): \DateTimeInterface;

    public function setUpdatedAt(): void;
}
