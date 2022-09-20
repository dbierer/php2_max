<?php

use App\Exceptions\CreateUserException;
use App\Models\Customer;
use App\Models\Employee;
use App\Models\Person;
use App\Models\User;

session_start();
spl_autoload_register(static function ($class) {
    $fn = __DIR__ . '/../src/' . str_replace('\\', '/', $class) . '.php';
    require_once $fn;
});

$employee = new Employee('Max', 'Simon');
$customer = new Customer('James', 'Bond');

$user = new User($customer);

$employee->setEmploymentStatus(true);
$customer->setCustomerStatus(true);

echo $customer->getCustomerStatus();
echo "\n" . $employee;
echo "\n" . $customer . "\n";

try {
    $user->create('JBond');
} catch (CreateUserException $e) {
    echo $e;
} finally {
    echo "To resolve this set a password \n";
}

var_dump($employee);
