<?php 
ini_set("display_errors", "On");

class Person
{

    public function __get(string $property): mixed 
    {
        $method = "get{$property}";
        if(method_exists($this, $method)) {
            return $this->$method();
        }
    }

    public function __isset(string $property): bool 
    {
        $method = "get{$property}";
        return (method_exists($this, $method));
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

$p = new Person();
if(isset($p->name)) {
    print $p->name;
}