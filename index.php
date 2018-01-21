<?php 
declare (strict_types = 1);

require __DIR__ . '/vendor/autoload.php';

$biuro = new Czortez\OfficeBuilding();

$biuro->startEmergencyAlarm();
echo  PHP_EOL;
var_export($biuro);

$biuro->stopEmergencyAlarm();
echo PHP_EOL;
var_export($biuro);

$statekWycieczkowy = new Czortez\Cruiser();

$statekWycieczkowy->startEmergencyAlarm();
echo PHP_EOL;
var_export($statekWycieczkowy);

$statekWycieczkowy->stopEmergencyAlarm();
echo PHP_EOL;
var_export($statekWycieczkowy);




