<?php 
ini_set("display_errors", "On");

require_once("test49.php");

class Person
{

    private int $id = 0;

    public function __construct(private string $name, private int $age, public Account $account)
    {

    }

    public function setId(int $id): void 
    {
        $this->id = $id;
    }

    public function __clone(): void 
    {
        $this->id = 0;
    }

}

$person = new Person("bob", 44, new Account(200));
$person->setId(343);
$person2 = clone $person;

// give $person some money
$person->account->balance += 10;
// $person2 sees the credit too
print $person2->account->balance;