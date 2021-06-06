<?php 
ini_set("display_errors", "On");

abstract class DomainObject
{

    public static function create(): DomainObject
    {
        return new static();
    }

}