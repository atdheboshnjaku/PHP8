<?php 
ini_set("display_errors", "On");

require_once("test44.php");

class Person
{

    public function __construct(private PersonWriter $writer)
    {

    }

    public function __call(string $method, array $args): mixed 
    {
        if(method_exists($this->writer, $method)) {
            return $this->writer->$method($this);
        }
    }

    public function getName(): string 
    {
        return "Bob";
    }

    public function getAge(): int 
    {
        return 30;
    }

}

$person = new Person(new PersonWriter());
$person->writeName();


