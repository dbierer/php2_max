<?php

namespace App\Classes;

class Employee extends Person
{
    protected string $employmentStatus;

    public function __serialize(): array
    {
        return ["firstName" => $this->getFirstName()];
    }

    public function __toString(): string
    {
        return 'This is not supposed to be echoed';
    }

    public function setEmploymentStatus(string $employmentStatus): void
    {
        $this->employmentStatus = $employmentStatus;
    }
}
