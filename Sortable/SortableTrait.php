<?php

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\HasLifecycleCallbacks]
trait SortableTrait
{
    #[ORM\Column(type: Types::INTEGER, options: ['default' => 0])]
    private int $position = 0;

    public function getPosition(): int
    {
        return $this->position;
    }

    public function setPosition(int $position): void
    {
        $this->position = $position;
    }

    #[ORM\PrePersist]
    public function setInitialPosition(): void
    {
        if ($this->position === null) {
            $this->position = 0;
        }
    }
}
