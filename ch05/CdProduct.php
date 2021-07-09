<?php

declare(strict_types=1);

namespace php8\ch05;

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

print_r(get_class_vars('\\php8\\ch05\\CdProduct'));
echo "<br>";
CdProduct::run();



