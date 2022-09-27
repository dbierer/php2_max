<?php

namespace App\Trait;

trait ActiveTrait
{
    public bool $active;

    public function setStatus(bool $active): void
    {
        $this->active = $active;
    }

    public function getStatus(): bool
    {
        return $this->active;
    }
}
