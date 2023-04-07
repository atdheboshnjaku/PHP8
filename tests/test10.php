<?php
ini_set("display_errors", "On");

require_once("test7.php");

class BookProduct extends ShopProduct
{

   public $numPages;

   public function __construct(
      string $title,
      string $firstName,
      string $mainName,
      float $price,
      int $numPages
   ) {
      parent::__construct(
         $title,
         $firstName,
         $mainName,
         $price
      );
      $this->numPages = $numPages;
   }

   public function getNumberOfPages(): int 
   {
      return $this->numPages;
   }

   public function getSummaryLine(): string 
   {
      $base  = parent::getSummaryLine();
      $base .= ": page count - {$this->numPages}";
      return $base;
   }

}

$product = new BookProduct(
   title: "Dangerous",
   mainName: "Jackson",
   firstName: "Michael",
   price: 10.99,
   numPages: 30
);

print "{$product->getSummaryLine()}\n";




















