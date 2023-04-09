<?php 

declare(strict_types=1);

require_once("autoload.php");

abstract class Lesson 
{

    public function __construct(private int $duration, private CostStrategy $costStrategy)
    {
    }

    public function cost(): int 
    {

        return $this->costStrategy->cost($this);

    }

    public function chargeType(): string 
    {

        return $this->costStrategy->chargeType();

    }

    public function getDuration(): int
    {

        return $this->duration;

    }

}

$lessons[] = new Seminar(4, new TimedCostStrategy());
$lessons[] = new Lecture(4, new FixedCostStrategy());

foreach($lessons as $lesson) {
    print "Lesson charge {$lesson->cost()}. ";
    print "Charge type: {$lesson->chargeType()}<br>";
}