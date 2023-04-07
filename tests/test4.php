<?php
ini_set("display_errors", "On");

require_once("test2.php");

class CdProduct extends ShopProduct
{

   public function getPlayLength(): int 
   {
      return $this->playLength;
   }

   public function getSummaryLine(): string 
   {
      $base  = "{$this->title} ( {$this->producerMainName}, ";
      $base .= "{$this->producerFirstName} )";
      $base .= ": playing time - {$this->playLength}";
      return $base;
   }

}

$product = new CdProduct(
   "Exile on Coldharbour Lane",
   "The",
   "Alabama 3",
   10.99,
   0,
   60.33
);

print "artist: {$product->getSummaryLine()}\n";




















