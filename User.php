<?php
declare (strict_types = 1);

class User
{
    public $nick;

    public $point;

    public function getNick() : string
    {
        return $this->nick;
    }
    public function setNick(string $nick) : void
    {
        $this->nick = $nick;
    }
    public function getPoint() : int
    {
        return $this->point;
    }
    public function setPoint(int $point) : void
    {
        $this->point = $point;

    }
}