<?php 
ini_set("display_errors", "On");

require_once("test35.php");

class Runner
{

    public static function init2(): void 
    {
        $fh = fopen("log.txt", "a");
        try {
            fputs($fh, "start\n");
            $conf = new Conf(dirname(__FILE__) . "/data.xml");
            print "user: " . $conf->get('user') . "\n";
            print "host: " . $conf->get('host') . "\n";
            $conf->set("pass", "newpass");
            $conf->write();
        } catch (FileException $e) {
            fputs($fh, "file exception\n");
        } finally {
            fputs($fh, "end\n");
            fclose($fh);
        }
    }

}

Runner::init2();