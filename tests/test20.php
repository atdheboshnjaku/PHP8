<?php 
ini_set("display_errors", "On");

abstract class ShopProductWriter
{

    protected array $products = [];

    public function addProduct(ShopProduct $shopProduct): void 
    {
        $this->products[] = $shopProduct;
    }

    abstract public function write(): void;

}

