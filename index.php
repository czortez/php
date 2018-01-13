<?php 
declare (strict_types = 1);
require_once 'Customer.php';
require_once 'ChaoticConsumer.php';
require_once 'GentleCustomer.php';
require_once 'CustomerFactory.php';
$customer = new Customer();
$customer->setName('Janusz');
$customer->askForDiscount();
echo $customer->getDiscount(),PHP_EOL;
echo $customer->getName(),PHP_EOL;

var_export($customer);


$rudolf = new ChaoticCustomer();
$rudolf->setName('Rudolf');
$rudolf->askForDiscount();
$rudolf = CustomerFactory::chooseCustomer('chaotic');
echo $rudolf->getDiscount(),PHP_EOL;
echo $rudolf->getName(),PHP_EOL;
var_export($rudolf);

$Krystian = new GentleCustomer();
$Krystian->setName('Krystian');
$Krystian->askForDiscount();
echo $Krystian->getDiscount(),PHP_EOL;
echo $Krystian->getName(),PHP_EOL;
GentleCustomer::getClassName();
var_export($Krystian);


