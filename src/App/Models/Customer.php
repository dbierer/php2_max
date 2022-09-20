<?php

namespace App\Models;

class Customer extends Person
{
    private string $customerStatus;

    public function getCustomerStatus(): string
    {
        return $this->customerStatus;
    }

    public function setCustomerStatus(string $customerStatus): void
    {
        $this->customerStatus = $customerStatus;
    }

    public function __toString(): string
    {
        return $this->getFirstName() . ' ' . $this->getLastName();
    }
}
