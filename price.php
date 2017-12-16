<?php
$kwota = 28;
/**
 BEGIN
 */
if ($kwota >=20) {
    $ileString = (string) $kwota;
    $ileDziesiatki = $ileString{0};
    $ileJednosci = $ileString{1};
    $dziesiatki = [
        'dwadziescia','trzydziesci','czterdziesci',
        'piecdziesiat','szescdziesiat','siedemdziesiat',
        'osiemdziesiat','dziewiedziesat'


    ];
}




/**
  END
 */
$jednosci = [
    'zero','jeden','dwa','trzy',
    'cztery','pięć','sześć','siedem',
    'osiem','dziewięć',

    ];
    $zlotychJednosci = [
        'złotych','złoty','złote','złote',
        'złote','złotych','złotych','złotych','złotych',
        'złotych',

    ];
    echo $jednosci[$kwota] . ' ' . $zlotychJednosci[$kwota], PHP_EOL;

