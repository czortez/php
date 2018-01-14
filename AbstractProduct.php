<?php 
declare (strict_types = 1);

abstract class AbstractProduct
{
    protected $price;

    abstract function order();

    public function setPrice(int $price)
    {
        $this->price = $price;
    }
    public function getPrice()
    {
        return $this->price;
    }
}