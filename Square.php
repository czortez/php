<?php
declare (strict_types = 1);

class Square implements AreaCalculableInterface
{
    public $length;
    public function getLenght() : int 
    {
        return $this->length;
    }
    public function setLenght(int $lenght) : void
    {
        $this->lenght = $lenght;
    }
    public function calcArea()
    {
        return $this->length * $this->length;
    }



}



    
