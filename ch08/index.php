<?php

declare(strict_types=1);

require_once("autoload.php");

$lesson = new Lecture(10, new TimedCostStrategy());
$lesson2 = new Seminar(10, new FixedCostStrategy());

print "<pre>";
print $lesson->cost() . " " . $lesson->chargeType();
print "</pre>";

print "<pre>";
print $lesson2->cost() . " " . $lesson2->chargeType();
print "</pre>";
