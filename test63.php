<?php 
ini_set("display_errors", "On");

require_once("test64.php");

interface PersonWriter
{

    public function write(Person $person): void;

}