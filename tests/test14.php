<?php
ini_set("display_errors", "On");

class ShopProduct
{

   private int|float $discount = 0;

   public function __construct(
      private string $title,
      private string $producerFirstName,
      private string $producerMainName,
      protected int|float $price
   ) {
      
   }

   public function getProducerFirstName(): string 
   {
      return $this->producerFirstName;
   }

   public function getProducerMainName(): string 
   {
      return $this->producerMainName;
   }

   public function setDiscount(int|float $num): void 
   {
      $this->discount = $num;
   }

   public function getDiscount(): int 
   {
      return $this->discount;
   }

   public function getTitle(): string 
   {
      return $this->title;
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
