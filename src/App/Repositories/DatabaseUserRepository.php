<?php

namespace Max\Project1\App\Repositories;

use Max\Project1\App\Models\User;
use PDO;
use PDOException;
use Exception;
use Throwable;

class DatabaseUserRepository
{
	// moved these to inside the class
	const DSN = 'mysql:dbname=phpcourse;host=localhost';
	const DB_USER = 'vagrant';
	const DB_PASSWORD = 'vagrant';
	const ERR_DB = 'ERROR: database problem';
	const SUCCESS = 'SUCCESS: operation completed';
	public $pdo = NULL;
	public function __construct()
	{
        try {
            $this->pdo = new PDO(self::DSN, self::DB_USER, self::DB_PASSWORD);
        } catch (Throwable $e){
			// count not return "$e" because it's an Exception class descendant and return type === string
            error_log($e->getMessage() . ':' . $e->getTraceAsString());
            throw new Exception(self::ERR_DB);
        }

	}
    public function add(User $user): string
    {

        try {
            $stmt = $this->pdo->prepare(
                'INSERT INTO users (firstname, lastname) VALUES (?, ?)'
            );

            $pdo->beginTransaction();
            $stmt->execute([$user->firstName, $user->lastName]);
            $pdo->commit();
        } catch (PDOException $e){
			// added rollback in case of error
			$pdo->rollback();
			// count not return "$e" because it's an Exception class descendant and return type === string
            return $e->getMessage() . ':' . $e->getTraceAsString();
        }

        return self::SUCCESS;
    }
}