<?php

declare (strict_types = 1);

class GentleCustomer extends Customer implements CustomerInterface
{
    /**
     * Konstruktor ustawia status Klienta na premium
     */
    public function __construct(int $age=0)

    

    {
        $this->status = 'premium';
        parent::__construct($age);
    }

    public function getDiscount() : int
    {
        return 50;
    }
    public function askForDiscount()

    {
        echo "Good morning my name is $this->name Can I have a discount", PHP_EOL;
    }
    public static function askForRenew(int $period)
    {
        
    }
}