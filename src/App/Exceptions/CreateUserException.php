<?php

namespace App\Exceptions;

use Exception;

class CreateUserException extends Exception {
    public function __construct(string $msg, ?int $en) {
        parent ::__construct($msg, $en);
    }
}
