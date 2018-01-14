<?php 
declare (strict_types = 1);

require_once('AbstractProduct.php');
require_once('Hosting.php');
require_once('Domain.php');

$produkt = new Domain();
$produkt->order();

$produkt2 = new Hosting();
$produkt2->order();