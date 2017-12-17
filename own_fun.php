<?php   
declare(strict_types=1);

/**
 * Wyświetlanie z formatowaniem podanego nazwiska.
 * 
 * @param string $familyName nazwisko
 */

function printFamilyName ($familyName) : void   
    {
        echo "Name: $familyName", PHP_EOL;
    }
printFamilyName('Nowak');
printFamilyName('Kowalski');
