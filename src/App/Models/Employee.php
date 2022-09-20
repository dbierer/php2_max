<?php

namespace App\Models;

class Employee extends Person
{
    protected string $employmentStatus;

    public function __serialize(): array
    {
        return ["firstName" => $this->getFirstName()];
    }

    public function __toString(): string
    {
        return $this->getFirstName() . ' ' . $this->getLastName();
    }

    public function getEmploymentStatus(): string
    {
        return $this->employmentStatus;
    }

    public function setEmploymentStatus(string $employmentStatus): void
    {
        $this->employmentStatus = $employmentStatus;
    }
}
