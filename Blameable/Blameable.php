<?php

use Symfony\Component\Security\Core\User\UserInterface;

interface Blameable
{
    public function getCreatedBy(): ?UserInterface;

    public function setCreatedBy(UserInterface $user): void;

    public function getUpdatedBy(): ?UserInterface;

    public function setUpdatedBy(UserInterface $user): void;
}
