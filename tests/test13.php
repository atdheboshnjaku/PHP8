<?php

ini_set("display_errors", "On");

class Point
{

    public int $x = 0;
    public int $y = 0;

    public function setVals(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX(): int 
    {
        return $this->x;
    }

    public function getY(): int 
    {
        return $this->y;
    }

}

$point = new Point();
print $point->x = 55;