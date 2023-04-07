<?php

class StaticExample
{

    public static int $aNum = 0;

    public static function sayHello(): void 
    {
        self::$aNum++;
        print "hello (" . self::$aNum . ")\n";
    }

}

print StaticExample::$aNum;
StaticExample::sayHello();