<?php
ini_set("display_errors", "On");

require_once("test2.php");

class BookProduct extends ShopProduct
{

   public function getNumberOfPages(): int 
   {
      return $this->numPages;
   }

   public function getSummaryLine(): string 
   {
      $base  = "{$this->title} ( {$this->producerMainName}, ";
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




















