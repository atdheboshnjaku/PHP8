<?php 
ini_set("display_errors", "On");

require_once("test25.php");
require_once("test26.php");

class ShopProduct
{
    
    use PriceUtilities;
    use IdentityTrait;

}

$p = new ShopProduct();
print $p->calculateTax(100) . "\n";
print $p->generateID() . "\n";