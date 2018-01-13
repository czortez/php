<?php 

declare (strict_types = 1);

class CustomerFactory
{
    public static function chooseCustomer(string $customerType) : Customer
    {
        if ($customerType === 'gentle') {
            return new GentleCustomer();

        }
        if ($customerType === 'chaotic')
            return new ChaoticCustomer();
        {
            return new Customer();
        }


    }


}   