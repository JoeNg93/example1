<?php

Class Cat
{
    private $color;
    private $name;

    public function SetColor($value)
    {
        $this->color = $value;
    }

    public function GetColor()
    {
        return $this->color;
    }

    public function GetName()
    {
        return $this->name;
    }

    public function SetName($value)
    {
        $this->name = $value;
    }
}

?>
