<?php
ini_set("display_errors", "On");

class ShopProduct
{

   public $title;
   public $producerMainName;
   public $producerFirstName;
   public $price;

   public function __construct(
      string $title,
      string $firstName,
      string $mainName,
      float $price
   ) {

      $this->title               = $title;
      $this->producerFirstName   = $firstName;
      $this->producerMainName    = $mainName;
      $this->price               = $price;
      
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

// $product1 = new ShopProduct(
//    price: 0.7,
//    title: "Shop Catalogue"
// );

//$product = new ShopProduct("title", "first", "main", "4.22");
//print "{$product->getProducer()}\n";
