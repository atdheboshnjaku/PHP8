<?php 
ini_set("display_errors", "On");

class Person
{

    public function getName(): string 
    {
        return "Bob";
    }

    public function getAge(): int 
    {
        return 44;
    }

    public function __toString(): string 
    {
        $desc  = $this->getName() . " (age ";
        $desc .= $this->getAge() . ")";
        return $desc;
    }

    public static function printThing(string|\Stringable $str): void 
    {
        print $str;
    }

}

$person = new Person();
print $person;
