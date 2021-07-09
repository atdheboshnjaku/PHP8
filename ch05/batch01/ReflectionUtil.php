<?php

declare(strict_types=1);

namespace php8\ch05\batch01;

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

}

echo "<pre>";
print ReflectionUtil::getClassSource(
    new \ReflectionClass(CdProduct::class)
);
echo "</pre>";