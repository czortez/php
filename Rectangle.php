<?php 
declare (strict_types = 1);

class Rectangle implements AreaCalculableInterface
{
    public $height;
    public $width;

    public function getHeight() : int
    {
        return $this->height;
    }
    public function getWidth() : int
    {
        return $this->width;
    }
    public function setHeight(int $height) : void
    {
        $this->height = $height;
    }
    public function setWidth(int $width) : void
    {
        $this->width = $width;
    }
   public function calcArea()
   {
    return $this->height * $this->width;
   }

}


