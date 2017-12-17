<?php   
declare(strict_types=1);

function factorial(int $n) :int
{
    if ($n === 1){
        return 1;
    }
    return $n * factorial($n-1);
}
