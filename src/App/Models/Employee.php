<?php

namespace Max\Project1\App\Models;

use App\Trait\ActiveTrait;
use App\Trait\EmployedTrait;

class Employee extends Person
{
    use ActiveTrait, EmployedTrait {
        ActiveTrait::getStatus insteadof EmployedTrait;
            EmployedTrait::getStatus as getEmployed;
        EmployedTrait::setStatus insteadof ActiveTrait;
            ActiveTrait::setStatus as getActive;
    }

    protected string $employmentStatus;

    public function __serialize(): array
    {
        return ["firstName" => $this->getFirstName()];
    }

    public function __toString(): string
    {
        return $this->getFirstName() . ' ' . $this->getLastName();
    }
}
