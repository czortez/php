<?php 
declare (strict_types = 1);

require_once 'GoodLuckTrait.php';
require_once 'AbstractOccupationClass.php';
require_once 'AbstractItemClass.php';
require_once 'HorseShoe.php';
require_once 'Baker.php';
require_once 'Coin.php';
require_once 'ChimneySweep.php';


$kominiarz = new ChimneySweep();
$kominiarz->increaseLuckAmount(10);
echo PHP_EOL;
var_export ($kominiarz);

$podkowa = new HorseShoe();
$podkowa->increaseLuckAmount(15);
echo PHP_EOL;
var_export ($podkowa);