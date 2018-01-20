<?php 
declare (strict_types = 1);

require_once 'AreaCalculableInterface.php';
require_once 'Rectangle.php';
require_once 'Square.php';

$prostokat = new Rectangle;
$prostokat->setHeight(3);
$prostokat->setWidth(3);

echo $prostokat->calcArea(), PHP_EOL;

$kwadrat = new Square;
$kwadrat->setLenght(5);


echo $kwadrat->calcArea(), PHP_EOL;

function getArea(Rectangle $prostokat) : int
{
    $prostokat->setHeight(3);
    $prostokat->setWidth(3);
    return $prostokat->calcArea();

}
echo getArea($prostokat), PHP_EOL;
