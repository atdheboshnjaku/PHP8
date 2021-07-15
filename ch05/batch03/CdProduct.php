<?php

declare(strict_types=1);

namespace php8\ch05\batch03;

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

    public function getSummaryLine(): string 
    {
        $base  = "{$this->title} ( {$this->producerMainName}, ";
        $base .= "{$this->producerFirstName} )";
        $base .= ": playing time - {$this->playLength}";
        return $base;
    }

}

$cd = new CdProduct("cd1", "bob", "bobbleson", 4, 50);
$classname = CdProduct::class;

$rmethod1 = new \ReflectionMethod("{$classname}::getProduct");
$rmethod2 = new \ReflectionMethod($classname, "getProduct");
$rmethod3 = new \ReflectionMethod($cd, "getProduct");




