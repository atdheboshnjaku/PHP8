<?php 
ini_set("display_errors", "On");

trait IdentityTrait
{

    public function generateID(): string 
    {
        return uniqid();
    }

}