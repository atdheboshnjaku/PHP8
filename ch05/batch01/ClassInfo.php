<?php

declare(strict_types=1);

namespace php8\ch05\batch01;

require_once("CdProduct.php");

class ClassInfo
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

    public static function getData(\ReflectionClass $class): string 
    {
        $details = "";
        $name = $class->getName();

        $details .= ($class->isUserDefined()) ? "$name is user defined\n" : "";
        $details .= ($class->isInternal()) ? "$name is built-in\n" : "";
        $details .= ($class->isInterface()) ? "$name is interface\n" : "";
        $details .= ($class->isAbstract()) ? "$name is an abstract class\n" : "";
        $details .= ($class->isFinal()) ? "$name is a final class\n" : "";
        $details .= ($class->isInstantiable()) ? "$name can be instatiated\n" : "$name can not be instantiated\n";
        $details .= ($class->isCloneable()) ? "$name can be cloned\n" : "$name can not be cloned\n";
        return $details;
    }

}

// Amazing information
$prodclass = new \ReflectionClass(CdProduct::class);
echo "<pre>";
print ClassInfo::getData($prodclass);
echo "</pre>";



