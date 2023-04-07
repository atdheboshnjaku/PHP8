<?php 
ini_set("display_errors", "On");

require_once("test65.php");

interface PersonWriter
{

    public function write(Person $person): void;

}