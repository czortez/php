<?php 
declare (strict_types = 1);

require_once 'Rectangle.php';
require_once 'Square.php';

$prostokat = new Rectangle;
$prostokat->setHeight(3);
$prostokat->setWidth(2);

echo $prostokat->calcArea(), PHP_EOL;

$kwadrat = new Square;
$kwadrat->setHeight(2);
$kwadrat->setWidth(4);

echo $kwadrat->calcArea(), PHP_EOL;

function getArea (Rectangle $prostokat): int
{
$prostokat->setHeight(2);
$prostokat->setWidth(6);
return $prostokat->calcArea();

}
echo getArea($prostokat),PHP_EOL;