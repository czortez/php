<?php
$weekdays = [
    'pl' => [
        'monday' => 'poniedziałek',
        'tuesday' => 'wtorek',
        'wednesday' => 'sroda',
        'thursday' => 'czwartek',
        'friday' => 'piatek',
        'saturday' => 'sobota',
        'sunday' => 'niedziela',
    ],
    'de' => [
        'monday' => 'montag',
        'tuesday' => 'dienstag',
        'wednesday' => 'mittwoch',
        'thursday' => 'donnerstag',
        'friday' => 'freitag',
        'saturday' => 'samstag',
        'sunday' => 'sonntag',
    ],

];
$checkWeekday = 'monday';
echo isset ($weekdays['pl'][$checkWeekday]) ? ' jest ' : ' brak ';
echo isset ($weekdays['en'][$checkWeekday]) ? ' jest ' : ' brak ';
echo isset ($weekdays['it'][$checkWeekday]) ? ' jest ' : ' brak ';
