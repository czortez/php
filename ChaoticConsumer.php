<?php

declare (strict_types = 1);

class ChaoticCustomer extends Customer implements CustomerInterface
{
    public function getDiscount() : int
    {
        return 4;
    }
    public function askForDiscount()
    {
        echo "I am $this->name  Give me a discount!!", PHP_EOL;
    }
    public static function askForRenew(int $period)
    {
        
    }
}