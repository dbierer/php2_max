<?php

namespace App\Interfaces;

interface PersonInterface {
    public function getFirstName(): string;

    public function setFirstName(string $firstName): void;
}
