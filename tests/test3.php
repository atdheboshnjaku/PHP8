<?php
ini_set("display_errors", "On");

class BookProduct
{

   public $numPages;
   public $title;
   public $producerMainName;
   public $producerFirstName;
   public $price;

   public function __construct(
      string $title,
      string $firstName,
      string $mainName,
      float $price,
      int $numPages
   ) {
      $this->title = $title;
      $this->producerMainName = $mainName;
      $this->producerFirstName = $firstName;
      $this->price = $price;
      $this->numPages = $numPages;
   }

   public function getNumberOfPages(): int 
   {
      return $this->numPages;
   }

   public function getSummaryLine(): string 
   {
      $base  = "{$this->title} ({$this->producerMainName}, ";
      $base .= "{$this->producerFirstName} )";
      $base .= ": page count - {$this->numPages}";
      return $base;
   }

   public function getProducer(): string 
   {
      return $this->producerFirstName . " "
      . $this->producerMainName;
   }


}

$product = new BookProduct(
   title: "Dangerous",
   mainName: "Jackson",
   firstName: "Michael",
   price: 10.99,
   numPages: 30
);

print "{$product->getProducer()}\n";




















