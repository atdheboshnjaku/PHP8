<?php
ini_set("display_errors", "On");

require_once("test14.php");

class BookProduct extends ShopProduct
{

   public function __construct(
      string $title,
      string $firstName,
      string $mainName,
      int|float $price,
      private int $numPages
   ) {
      parent::__construct(
         $title,
         $firstName,
         $mainName,
         $price
      );
      
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




















