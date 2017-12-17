<?php   
declare(strict_types=1);
require_once 'Customer.php';

$customer = new Customer();
$customer->name = 'Janusz';
echo $customer->getDiscount();
var_export($customer);