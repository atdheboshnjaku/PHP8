<?php 
ini_set("display_errors", "On");

class Runner
{

    public static function init(): void 
    {

        try {
            $fh = fopen("log.txt", "a");
            fputs($fh, "start\n");
            $conf = new Conf(dirname(__FILE__) . "/conf.broken.xml");
            print "user: " . $conf->get('user') . "\n";
            print "host: " . $conf->get('host') . "\n";
            $conf->set("pass", "newpass");
            $conf->write();
            fputs($fh, "end\n");
            fclose($fh);
        } catch (FileException $e) {
            fputs($fh, "file exception\n");
            throw $e;
        } catch (XmlException $e) {
            fputs($fh, "xml exception\n");
        } catch (ConfException $e) {
            fputs($fh, "conf exception\n");
        } catch (\Exception $e) {
            fputs($fh, "general exception\n");
        }

    }

}