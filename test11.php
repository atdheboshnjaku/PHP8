<?php
ini_set("display_errors", "On");

require_once("test12.php");

class ShopProductWriter
{

   private $products = [];

   public function addProduct(ShopProduct $shopProduct): void 
   {
      $this->products[] = $shopProduct;
   }

   public function write(): void 
   {
      $str = "";
      foreach($this->products as $shopProduct)
      {
         $str .= "{$shopProduct->title}: ";
         $str .= $shopProduct->getProducer();
         $str .= " ({$shopProduct->getPrice()})\n";
      }
      print $str;
   }

}  
