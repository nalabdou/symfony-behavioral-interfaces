<?php

interface Sortable
{
    public function getPosition(): int;
    public function setPosition(int $position): void;
}
