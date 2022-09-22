<?php

trait ActiveTrait
{
    public bool $active;

    public function setActive(bool $value): void
    {
        $this->active = $value;
    }

    public function getActive(): bool
    {
        return $this->active;
    }
}
