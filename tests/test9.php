<?php
ini_set("display_errors", "On");

require_once("test7.php");

class CdProduct extends ShopProduct
{

   public $playLength;

   public function __construct(
      string $title,
      string $firstName,
      string $mainName,
      float $price,
      int $playLength
   ) {
      parent::__construct(
         $title,
         $firstName,
         $mainName,
         $price
      );
      $this->playLength = $playLength;
   }

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
   60.33
);

print "artist: {$product->getSummaryLine()}\n";




















