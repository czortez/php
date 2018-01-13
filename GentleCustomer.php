<?php

declare (strict_types = 1);

class GentleCustomer extends Customer
{
public function getDiscount(): int
{
    return 50 ;
}
public function askForDiscount()
{
    echo "Good morning my name is $this->name Can I have a discount",PHP_EOL;
}
}