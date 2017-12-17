<?php   
declare(strict_types=1);

$names = ['Zenon', 'Yeti', 'X-man'];

$callback = function(string $name): string {
        return "Hello, {$name}!";
};

$hellos = array_map($callback, $name);
var_export($hellos);
