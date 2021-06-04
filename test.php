<?php
ini_set("display_errors", "On");

class CdProduct
{

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
      int $playLength
   ) {
      $this->title = $title;
      $this->producerMainName = $mainName;
      $this->producerFirstName = $firstName;
      $this->price = $price;
      $this->playLength = $playLength;
   }

   public function getPlayLength(): int 
   {
      return $this->playLength;
   }

   public function getSummaryLine(): string 
   {
      $base  = "{$this->title} ({$this->producerMainName}, ";
      $base .= "{$this->producerFirstName} )";
      $base .= ": playing time - {$this->playLength}";
      return $base;
   }

   public function getProducer(): string 
   {
      return $this->producerFirstName . " "
      . $this->producerMainName;
   }


}

$product = new CdProduct(
   title: "Dangerous",
   mainName: "Jackson",
   firstName: "Michael",
   price: 10.99,
   playLength: 3.22
);

print "{$product->getProducer()}\n";




















