<?php 
ini_set("display_errors", "On");

require_once("test31.php");
require_once("test32.php");
require_once("test33.php");

class SpreadSheet extends Document 
{

}

echo "<pre>";
print_r(User::create());
print_r(SpreadSheet::create());
echo "</pre>";