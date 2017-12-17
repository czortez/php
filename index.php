<?php   
declare(strict_types=1);
require_once 'Customer.php';

$customer = new Customer();
$customer->name = 'Janusz';
var_export($customer);