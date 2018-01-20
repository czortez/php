<?php 
declare (strict_types = 1);

class Rectangle
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
    public function calcArea() : int
    {
        return $this->height * $this->width;
    }

}

