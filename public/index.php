<?php

use App\Models\Customer;
use App\Models\Employee;

session_start();
spl_autoload_register(static function ($class) {
    $fn = __DIR__ . '/../src/' . str_replace('\\', '/', $class) . '.php';
    require_once $fn;
});

$employee = new Employee('Max', 'Simon');
$customer = new Customer('James', 'Bond');

$employee->setEmploymentStatus(true);
$customer->setCustomerStatus(true);

echo $customer->getCustomerStatus();
echo "\n" . $employee;
echo "\n" . $customer . "\n";

var_dump($employee);
