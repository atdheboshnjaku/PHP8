<?php

declare(strict_types=1);

namespace php8\ch05\batch01;

class CdProduct
{

    public string $coverUrl = "cover url";

    public function getTitle(): string 
    {
        return "fake title";
    }

    public static function getProduct()
    {
        return new CdProduct(
            "Exile on Coldharbour Lane",
            "The",
            "Alabama 3",
            10.99,
            60.33
        );
    }

    public static function run(): void  
    {
        $product = self::getProduct();
        $method = "getTitle";   
        print $product->$method();
    }

}

// Amazing information
$prodclass = new \ReflectionClass(CdProduct::class);
echo "<pre>";
print $prodclass;
echo "</pre>";



