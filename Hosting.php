<?php 
declare (strict_types = 1);

class Hosting extends AbstractProduct
{
    public function order()
    {
        echo "Hosting", PHP_EOL;

    }
    public function changeStatus(string $newStatus)
    {
echo "Status zmieniony: $newStatus";
    }

}