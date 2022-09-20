<?php

namespace App\Models;

class Address
{
    public string $street;

    public int $number;

    public string $city;

    public string $state;

    public string $zipcode;

    public string $country;

    public function __construct(string $country)
    {
        $this->country = $country;
    }

    public function getStreet(): string
    {
        return $this->street;
    }

    public function getNumber(): int
    {
        return $this->number;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function getZipcode(): string
    {
        return $this->zipcode;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

}
