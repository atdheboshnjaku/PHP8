<?php 
ini_set("display_errors", "On");

class Sample
{

    public static function init()
    {
        try {
            eval("ilegal code");
        } catch (\Error $e) {
            print get_class($e) . "\n";
            print $e->getMessage();
        } catch (\Exception $e) {

        } finally {
            print "All good\n";
        }
    }
}

$t = new Sample();
$t->init();