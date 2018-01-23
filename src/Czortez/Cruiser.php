<?php 
declare (strict_types = 1);

namespace Czortez;

class Cruiser
{
   use EmergencyAlarmTrait; 
   
   public function testLogow()
{
    $log = new Logger('czortez');
    $log->pushHandler(new StreamHandler('logi.log', Logger::WARNING));
    
   
    $log->warning('Foo');
    $log->error('Bar');

}
}

