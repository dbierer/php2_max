<?php

namespace App\Trait;

trait EmployedTrait
{
    public bool $status;

    public function setStatus(bool $value): void
    {
        $this->status = $value;
    }

    public function getStatus(): bool
    {
        return $this->status;
    }
}
