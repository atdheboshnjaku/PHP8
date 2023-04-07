<?php 
ini_set("display_errors", "On");

require_once("test29.php");

class User extends DomainObject
{

}

print_r(User::create());
