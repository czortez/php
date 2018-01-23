<?php 
declare (strict_types = 1);

use Czortez\Cruiser;



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

$logi = new Cruiser();
$logi->testLogow();
var_export($logi);
echo PHP_EOL;


