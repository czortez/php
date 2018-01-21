<?php 
declare (strict_types = 1);

require_once 'EmergencyAlarmTrait.php';
require_once 'AbstractBuildingClass.php';
require_once 'AbstractShipClass.php';
require_once 'Boat.php';
require_once 'Cruiser.php';
require_once 'ResidentalHouse.php';
require_once 'OfficeBuilding.php';

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




