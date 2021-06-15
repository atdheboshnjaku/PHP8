<?php 
ini_set("display_errors", "On");

require_once("test63.php");

class Person
{

    public function output(PersonWriter $writer): void 
    {
        $writer->write($this);
    }

    public function getName(): string 
    {
        return "Bob";
    }

    public function getAge(): int 
    {
        return 44;
    }

}

$person = new Person();
$person->output(
    new class implements PersonWriter {
        public function write(Person $person): void 
        {
            print $person->getName() . " " . $person->getAge() . "\n";
        }
    }
);





