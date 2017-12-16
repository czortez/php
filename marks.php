<?php   
$tabMarks = [
    'Alicja' => [
        'Fizyka' => 4,
        'Chemia' => 3,
        'Biologia' => 6,
    ],
    'Bobik' => [
        'Fizyka' => 1,
        'Chemia' => 3,
        'Biologia' => 5,  

    ],
    'Krystian' => [
        'Fizyka' => 4,
        'Chemia' => 3,
        'Biologia' => 6,
    ],

    ];
    foreach ($tabMarks as $name => $subjects) {
        foreach ($subjects as $subject => $mark) {
            echo "Uczeń {$name} z przedmiotu {$subject} otrzymal {$mark}", PHP_EOL;
        }
    }



