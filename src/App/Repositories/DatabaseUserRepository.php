<?php

namespace Max\Project1\App\Repositories;

use Max\Project1\App\Models\User;
use PDO;
use PDOException;

const DSN = 'mysql:dbname=phpcourse;host=localhost';
const DB_USER = 'vagrant';
const DB_PASSWORD = 'vagrant';

class DatabaseUserRepository
{
    public function add(User $user): string
    {
        try {
            $pdo = new PDO(DSN, DB_USER, DB_PASSWORD);
            $stmt = $pdo->prepare(
                'INSERT INTO users (firstname, lastname) VALUES (?, ?)'
            );

            $pdo->beginTransaction();
            $stmt->execute([$user->firstName, $user->lastName]);

            $pdo->commit();
        } catch (PDOException $e){
            return $e;
        }

        return "unknown error";
    }
}
