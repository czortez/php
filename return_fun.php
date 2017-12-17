<?php   
declare(strict_types=1);

/**
 * Suma dwóch 
 */
function sum(int $a = 0, int $b = 0) : int
{
    return $a + $b;
}
echo sum (5,3),PHP_EOL;
function diff(int $a = 0, int $b = 0) : int
{
    return $a - $b;
}
echo diff (5,3),PHP_EOL;
function multi(int $a = 0, int $b = 0) : int
{
    return $a * $b;
}
echo multi (5,3),PHP_EOL;
function div(int $a = 0, int $b = 0) : float
{
    if($b === 0){
            die('Nigdy,cholero,nie dziel przez zero');
    }
    return $a / $b;
}
echo div (6,0),PHP_EOL;




