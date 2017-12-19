<?php
$tablica = [
    'oceny' => [
        'ang' => [
            'semI' => 6,
            'semII' => 5,
        ],
        'mat' => 6,
    ],
];

foreach ($tablica as $element) {
    var_export($element);
    // echo $oceny['ang']['semII'];
    echo $element;
}

for ($i = 0; $i < count($tablica); ++$i) {
    echo $tablica[$i];
}
