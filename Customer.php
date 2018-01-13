<?php 
class Customer
{
    private $name;
    public function getDiscount() : int
    {
        return 20;
    }
    public function setName(string $name) : void
    {
        $this->name = $name;
    }
    public function getName() : string
    {
        return $this->name;
    }
}