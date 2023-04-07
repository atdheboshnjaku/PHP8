<?php 
ini_set("display_errors", "On");

require_once("test66.php");

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
    new class ("/tmp/persondump") implements PersonWriter {
        private $path;

        public function __construct(string $path)
        {
            $this->path = $path;
        }

        public function write(Person $person): void 
        {            
            file_put_contents($this->path, $person->getName() . " " . $person->getAge() . "\n");    
        }
            
        }
);








