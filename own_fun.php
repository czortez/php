<?php   
declare(strict_types=1);

/**
 * Wyświetlanie z formatowaniem podanego nazwiska.
 * 
 * @param string $familyName nazwisko
 */

function printFamilyName (string $familyName, int $year = 2000) 
{
    echo "Name: $familyName. Born: $year", PHP_EOL;

}

printFamilyName('Kowalski', 1984);

