<?php

interface SoftDeleteable
{
    public function getDeletedAt(): ?\DateTimeInterface;
}
