<?php 

declare (strict_types = 1);

class CustomerFactory
{
    const GENTLE = 'gentle';
    const CHAOTIC = 'chaotic';


    public static function chooseCustomer(string $customerType, int $bornYear = 0) : Customer
    {


        if ($bornYear) {
            $age = date('Y') - $bornYear;
        }
        if ($customerType === self::GENTLE) {
            return new GentleCustomer($age);
        }
        if ($customerType === self::CHAOTIC)
            return new ChaoticCustomer($age);
        {
            return new Customer($age);
        }



    }





}   