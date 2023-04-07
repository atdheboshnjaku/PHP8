<?php 
ini_set("display_errors", "On");

require_once("test22.php");

class ShopProduct extends Chargeable
{

    protected float $price;

    public function getPrice(): float 
    {
        return $this->price;
    }

}