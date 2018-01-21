<?php 
declare (strict_types = 1);

trait GoodLuckTrait
{
    public $luckAmount;
   
    public function increaseLuckAmount($luckAmount)
    {
        $this->luckAmount += $luckAmount;
    }
    public function setLuck() : int
    {
        $this->luckAmount = $luckAmount;
    }
    public function getLuck() : int 
    {
        return 20;
    }

}
