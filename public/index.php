<?php

use App\Models\User;
use App\Repositories\DatabaseUserRepository;

session_start();
spl_autoload_register(static function ($class) {
    $fn = __DIR__ . '/../src/' . str_replace('\\', '/', $class) . '.php';
    require_once $fn;
});

$firstName = 'Mark';
$lastName = 'Watney';
$repository = new DatabaseUserRepository();

$user = new User($firstName, $lastName);
$repository->add($user);

