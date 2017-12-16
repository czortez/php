<?php
$exArr1 = [
   'klucz' => 'wartosc',
];
var_export($exArr1);

$exArr2 = [
   'wartosc',
];
var_export($exArr2);

$exArr3 = [];
$exArr3['klucz'] = 'wartosc';
var_export($exArr3);

$exArr4 = [];
$exArr4[] = 'wartosc';
var_export($exArr4);

$exArr5 = [];
$exArr5{0} = 'wartosc';
var_export($exArr5);

$exArr6 = [];
$exArr6{'klucz'} = 'wartosc';
var_export($exArr6);

$wartosc = $exArr1['klucz'];
var_export($wartosc);
$wartosc = $exArr2[0];
var_export($wartosc);
$wartosc = $exArr3{'klucz'};
var_export($wartosc);
$wartosc = $exArr4{0};
var_export($wartosc);

unset($exArr1['klucz']);
var_export($exArr1);
unset($exArr2[0]);
var_export($exArr2);
unset($exArr3{'klucz'});
var_export($exArr3);
unset($exArr4{0});
var_export($exArr4);