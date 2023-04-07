<?php 
ini_set("display_errors", "On");

require_once("test25.php");
require_once("test26.php");
require_once("test27.php");

class ShopProduct
{
    
    use PriceUtilities;
    use IdentityTrait;
    use TaxTools {
        TaxTools::calculateTax insteadof PriceUtilities;
        PriceUtilities::calculateTax as basicTax;
    }

}

$p = new ShopProduct();
print $p->calculateTax(100) . "\n";
print $p->generateID() . "\n";
print $p->basicTax(100) . "\n";