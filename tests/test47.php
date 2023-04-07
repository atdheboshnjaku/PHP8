<?php 
ini_set("display_errors", "On");

class Person
{

    private int $id;

    public function __construct(protected string $name, private int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function setId(int $id): void 
    {
        $this->id = $id;
    }

    public function __destruct()
    {
        if(!empty($this->id)) {
            print "saving person\n";
        }
    }

}

$person = new Person("bob", 44);
$person->setId(343);
unset($person);