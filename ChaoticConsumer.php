<?php

declare (strict_types = 1);

class ChaoticCustomer extends Customer
{
public function getDiscount(): int
{
    return 5;
}
}