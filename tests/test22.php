<?php 
ini_set("display_errors", "On");

interface Chargeable
{

    public function getPrice(): float;

}