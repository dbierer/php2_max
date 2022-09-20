<?php

namespace App\Models;

use App\Exceptions\CreateUserException;
use App\Interfaces\PersonInterface;

class User
{
    private PersonInterface $person;

    public function __construct(PersonInterface $person)
    {
        $this->person = $person;
    }

    public function show(): string
    {
        $customer = new Customer('first', 'last');

        return $customer . $this->person;
    }


    /**
     * @throws CreateUserException
     */
    public function create(string $username, $password = null): string
    {
        if ($password === null) {
            throw new CreateUserException('Password is not set', null);
        }

        return 'User created!';
    }
}
