<?php   
$firstName = 'Krystian';
$secondName = &$firstName;
$secondName = 'Kajetan';
echo "My first name is {$firstName}.",PHP_EOL;
echo "My second name is {$secondName}.",PHP_EOL;
