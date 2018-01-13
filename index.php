<?php 
declare (strict_types = 1);
require_once 'Customer.php';
require_once 'ChaoticConsumer.php';

$customer = new Customer();
$customer->setName('Janusz');
echo $customer->getDiscount();
echo $customer->getName();
var_export($customer);


$rudolf = new ChaoticCustomer();
$rudolf->setName('Rudolf');
echo $rudolf->getDiscount();
echo $rudolf->getName();
var_export($rudolf);

