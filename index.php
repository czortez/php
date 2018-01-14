<?php 
declare (strict_types = 1);
require_once 'Customer.php';
require_once 'ChaoticConsumer.php';
require_once 'GentleCustomer.php';
require_once 'CustomerFactory.php';
$customer = new Customer();
$customer->setName('Janusz');
$customer->askForDiscount();
echo $customer->getDiscount(), PHP_EOL;
echo $customer->getName(), PHP_EOL;

var_export($customer);



$rudolf = CustomerFactory::chooseCustomer(CustomerFactory::GENTLE,1984);
$rudolf->setName('Rudolf');
$rudolf->askForDiscount();

echo $rudolf->getDiscount(), PHP_EOL;
echo $rudolf->getName(), PHP_EOL;
var_export($rudolf);



$janek = new Customer(3);
$zenek = new GentleCustomer(4);
$barnaba = new ChaoticCustomer(5);

var_export($janek);
var_export($zenek);
var_export($barnaba);