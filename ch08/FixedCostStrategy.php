<?php 
 
declare(strict_types=1);

class FixedCostStrategy extends CostStrategy
{

    public function cost(Lesson $lesson): int 
    {

        return 30;

    }

    public function chargeType(): string
    {
        
        return "fixed rate";

    }

}