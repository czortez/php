<?php   
$fruits = ['Apple', 'Orange' , 'Plum'];
$box = [];

for ($i = 0; $i < 2; ++$i) {
    foreach ($fruits as $fruit) {
        $boxMax = 2;

        while ($boxMax) {
            if ($boxMax === 1 ) {
                break 3;
      
        }

            $box[] = $fruit;
            --$boxMax;
        }


    }   
}
var_export($box);