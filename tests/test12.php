<?php
ini_set("display_errors", "On");

class ShopProduct
{

   protected $discount = 0;

   public $title;
   public $producerMainName;
   public $producerFirstName;
   public $price;

   public function __construct(
      float $price
   ) {
      $this->price = $price;
   }

   public function setDiscount(int $num): void 
   {
      $this->discount = $num;
   }

   public function getPrice(): int|float 
   {
      return ($this->price - $this->discount);
   }

   public function getProducer(): string
   {
   return $this->producerFirstName . " "
   . $this->producerMainName;
   }

   public function getSummaryLine(): string 
   {
      $base  = "{$this->title} ( {$this->producerMainName}, ";
      $base .= "{$this->producerFirstName} )";
      return $base;
   }

}

$product1 = new ShopProduct(
   10
);

print "The price is {$product1->price}\n";
