<?php 
ini_set("display_errors", "On");

require_once("test45.php");

class PersonWriter
{

    public function writeName(Person $p): void 
    {
        print $p->getName() . "\n";
    }

    public function writeAge(Person $p): void 
    {
        print $p->getAge() . "\n";
    }

}