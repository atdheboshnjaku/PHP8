<?php
ini_set("display_errors", "On");

class ShopProduct
{

   private int $id = 0;

   public function setID(int $id): void 
   {
        $this->id = $id;
   }

   public static function getInstance(int $id, \PDO $pdo): ShopProduct
   {
        $stmt = $pdo->prepare("SELECT * FROM products WHERE id=?");
        $result = $stmt->execute([$id]);
        $row = $stmt->fetch();
        if(empty($row)) {
            return null;
        }


        if($row['type'] == "book") {
            $product = new BookProduct(
                $row['title'],
                $row['firstname'],
                $row['mainname'],
                (float) $row['price'],
                (int) $row['numpages']
            );
        } elseif($row['type'] == "cd") {
            $product = new CdProduct(
                $row['title'],
                $row['firstname'],
                $row['mainname'],
                (float) $row['price'],
                (int) $row['playlength']
            );
        } else {
            $firstname = (is_null($row['firstname'])) ? "" : $row['firstname'];
            $product = new ShopProduct(
                $row['title'],
                $firstname,
                $row['mainname'],
                (float) $row['price']
            );
        }

        $product->setID((int) $row['id']);
        $product->setDiscount((int) $row['discount']);
        return $product;

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
