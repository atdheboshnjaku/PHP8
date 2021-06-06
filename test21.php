<?php 
ini_set("display_errors", "On");

require_once("test20.php");

class TextProductWriter extends ShopProductWriter
{

    public function write(): void 
    {
        $str = "PRODUCTS:\n";
        foreach($this->products as $shopProduct)
        {
            $str .= $shopProduct->getSummaryLine() . "\n";
        }
        print $str;
    }

}