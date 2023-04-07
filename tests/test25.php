<?php 
ini_set("display_errors", "On");

trait PriceUtilities
{

    private $taxrate = 20;

    public function calculateTax(float $price): float 
    {
        return (($this->taxrate / 100) * $price);
    }

}