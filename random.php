<?php

for ($i=0; $i<10;$i++){
    do {
        $random = rand(1,1000);
        break;
    } while ($random % 2);
    echo $random, PHP_EOL;
};
