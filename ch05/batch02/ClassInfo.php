<?php

declare(strict_types=1);

namespace php8\ch05\batch02;

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

    public static function methodData(\ReflectionMethod $method): string 
    {
        $details = "";
        $name = $method->getName();

        $details .= ($method->isUserDefined()) ? "$name is user defined\n" : "";
        $details .= ($method->isInternal()) ? "$name id built-in\n" : "";
        $details .= ($method->isAbstract()) ? "$name is an abstract class\n" : "";
        $details .= ($method->isPublic()) ? "$name is public\n" : "";
        $details .= ($method->isProtected()) ? "$name is protected\n" : "";
        $details .= ($method->isPrivate()) ? "$name is private\n" : "";
        $details .= ($method->isStatic()) ? "$name is static\n" : "";
        $details .= ($method->isFinal()) ? "$name is final\n" : "";
        $details .= ($method->isConstructor()) ? "$name is the constructor\n" : "";
        $details .= ($method->returnsReference()) ? "$name returns a reference (as opposed to a value)\n" : "";

        return $details;

    }

}

$class = new \ReflectionClass(CdProduct::class);
$method = $class->getMethod('getSummaryLine');
echo "<pre>";
print ClassInfo::methodData($method);







