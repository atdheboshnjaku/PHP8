<?php 
ini_set("display_errors", "On");

require_once("test51.php");
require_once("test58.php");

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

$processor = new ProcessSale();

$processor->registerCallback(Totalizer2::warnAmount(8));

$processor->sale(new Product("shoes", 6));
print "\n";
$processor->sale(new Product("coffee", 6));

















