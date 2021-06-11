<?php 
ini_set("display_errors", "On");

require_once("test51.php");

class ProcessSale
{

    private array $callbacks;

    public function registerCallback(callable $callback): void 
    {
        $this->callbacks[] = $callback;
    }

    public function sale(Product $product): void 
    {
        print "{$product->name}: processing \n";
        foreach($this->callbacks as $callback) {
            call_user_func($callback, $product);
        }
    }

}

$logger = fn($product) => print "  logging ({$product->name})\n";

$processor = new ProcessSale();
$processor->registerCallback($logger);

$processor->sale(new Product("shoes", 6));
print "\n";
$processor->sale(new Product("coffee", 6));



