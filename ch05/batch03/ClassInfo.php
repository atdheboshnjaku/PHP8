<?php

declare(strict_types=1);

namespace php8\ch05\batch03;

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

    public static function argData(\ReflectionParameter $arg): string 
    {
        $details = "";
        $declaringclass = $arg->getDeclaringClass();
        $name = $arg->getName();
        $position = $arg->getPosition();

        $details .= "\$$name has postition $position\n";
        if($arg->hasType()) {
            $type = $arg->getType();
            $typenames = [];
            
            if($type instanceof \ReflectionUnionType)
            {
                $types = $type->getTypes();
                foreach($types as $utype) {
                    $typenames[] = $utype->getName();
                }
            } else {
                $typenames[] = $type->getName();
            }
            
            $typenames = implode("|", $typenames);

            $details .= "\&&name should be type {$typename}\n";
        }

        if($arg->isPassedByReference()) {
            $details .= "\${$name} is passed by reference\n";
        }

        if($arg->isDefaultValueAvailable()) {
            $def = $arg->getDefaultValue();
            $details .= "\${$name} has default: $def\n";
        }

        if($arg->allowsNull()) {
            $details .= "\${$name} can be null\n";
        }

        return $details;
    }

}










