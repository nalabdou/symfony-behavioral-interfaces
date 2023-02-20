<?php

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

trait BlameableTrait
{
    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(nullable: false)]
    private UserInterface $createdBy;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(nullable: true)]
    private UserInterface $updatedBy;

    public function setCreatedBy(UserInterface $user): void
    {
        $this->createdBy = $user;
    }

    public function setUpdatedBy(UserInterface $user): void
    {
        $this->updatedBy = $user;
    }

    public function getCreatedBy(): ?UserInterface
    {
        return $this->createdBy;
    }

    public function getUpdatedBy(): ?UserInterface
    {
        return $this->updatedBy;
    }
}
