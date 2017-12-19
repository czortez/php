<?php   
declare(strict_types=1);
require_once 'Customer.php';

$customer = new Customer();
$customer->setName('Janusz');
echo $customer->getDiscount();
echo $customer->getName();
var_export($customer);

