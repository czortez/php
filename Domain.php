<?php 
declare (strict_types = 1);

class Domain extends AbstractProduct
{
    public function order()
    {
        echo "Domena", PHP_EOL;
    }

    public function changeStatus(string $newStatus)
    {
echo "Nie mozna zmienic statusu domeny: $newStatus";
    }
}