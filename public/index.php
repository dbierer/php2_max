<?php

use Max\Project1\App\Models\User;
use Max\Project1\App\Repositories\DatabaseUserRepository;

session_start();

$firstName = 'Mark';
$lastName = 'Watney';
$repository = new DatabaseUserRepository();

$user = new User($firstName, $lastName);
$repository->add($user);

$email = "asd.sdfFF@asdf.com";
$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
$test = (preg_match($regex, strtolower($email))) ? "valid email": "invalid email";

echo $test;
