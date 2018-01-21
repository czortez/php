<?php 
declare (strict_types = 1);

public function startSunnyRace(Boat $boat)
{
    $boat->openWindow();
    $boat->swim();
}

$bols = new Boat();
startSunnyRace($bols);

$yellowSubmarine = new Submarine();
startSunnyRace($yellowSubmarine);
