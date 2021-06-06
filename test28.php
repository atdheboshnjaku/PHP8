<?php 
ini_set("display_errors", "On");

trait PriceUtilities
{

    private static int $taxrate = 20;

    public static function calculateTax(float $price): float 
    {
        return ((self::$taxrate / 100) * $price);
    }

}