<?php
ini_set("display_errors", "On");



class ShopProduct
{

   public $numPages;
   public $playLength;
   public $title;
   public $producerMainName;
   public $producerFirstName;
   public $price;

   public function __construct(
      string $title,
      string $firstName,
      string $mainName,
      float $price,
      int $numPages = 0,
      int $playLength = 0
   ) {

      $this->title               = $title;
      $this->producerFirstName   = $firstName;
      $this->producerMainName    = $mainName;
      $this->price               = $price;
      $this->numPages            = $numPages;
      $this->playLength          = $playLength;
      
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
