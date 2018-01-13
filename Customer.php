<?php 
class Customer
{
    protected $name;
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
    public function askForDiscount() 
    {
         echo  " Good morning my name is $this->name Can I have a discount",PHP_EOL;
    }
    public static function getClassName(): void
    {
        echo 'Jestem klasą', get_called_class(), PHP_EOL;
    }
}