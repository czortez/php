<?php   
declare(strict_types=1);

$sayHello = function(string $name) : string {
    return "Hello, {$name}!";
};

echo $sayHello('Diana');