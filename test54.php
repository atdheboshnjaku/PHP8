<?php 
ini_set("display_errors", "On");

require_once("test51.php");

class Mailer
{

    public function doMail(Product $product): void 
    {
        print "  mailing ({$product->name})\n";
    }

}
