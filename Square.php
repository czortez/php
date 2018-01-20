<?php
declare (strict_types = 1);

class Square extends Rectangle 
{
    public function setHeight(int $height): void
    {
        $this->height = $height;
        $this->width = $height;
    }
    public function setWidth(int $width): void
    {
        $this->width = $width;
        $this->height = $width;
    }
}
