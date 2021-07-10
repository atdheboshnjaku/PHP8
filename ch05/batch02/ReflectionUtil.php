<?php

declare(strict_types=1);

namespace php8\ch05\batch02;

require_once("CdProduct.php");

class ReflectionUtil
{

    public static function getClassSource(\ReflectionClass $class): string 
    {
        $path  = $class->getFileName();
        $lines = @file($path);
        $from  = $class->getStartLine();
        $to    = $class->getEndLine();
        $len   = $to - $from + 1;

        return implode(array_slice($lines, $from -1, $len)); 
    }

    public static function getMethodSource(\ReflectionMethod $method): string 
    {
        $path = $method->getFileName();
        $lines = @file($path);
        $from = $method->getStartLine();
        $to = $method->getEndLine();
        $len = $to - $from + 1;

        return implode(array_slice($lines, $from - 1, $len));
    }

}

$class = new \ReflectionClass(CdProduct::class);
$method = $class->getMethod('getSummaryLine');
echo "<pre>";
print ReflectionUtil::getMethodSource($method);



