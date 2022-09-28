<?php

namespace Max\Project1\App\Interfaces;

interface PersonInterface {
    public function getFirstName(): string;

    public function setFirstName(string $firstName): void;
}
