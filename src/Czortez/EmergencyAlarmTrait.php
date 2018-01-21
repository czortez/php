<?php 
declare(strict_types = 1);

namespace Czortez;

trait EmergencyAlarmTrait
{
    private $emergencyAlarm = false;

    public function startEmergencyAlarm()
    {
        $this->emergencyAlarm = true;
    }
    public function stopEmergencyAlarm()
    {
        $this->emergencyAlarm = false;
    }
}
