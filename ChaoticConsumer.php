<?php

declare (strict_types = 1);

class ChaoticCustomer extends Customer
{
    public function getDiscount() : int
    {
        return 4;
    }
    public function askForDiscount()
    {
        echo "I am $this->name  Give me a discount!!", PHP_EOL;
    }
}