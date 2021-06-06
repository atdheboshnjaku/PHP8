<?php 
ini_set("display_errors", "On");

require_once("test25.php");

class ShopProduct
{
    
    use PriceUtilities;

}

$p = new ShopProduct();
print $p->calculateTax(100) . "\n";