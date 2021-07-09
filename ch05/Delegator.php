<?php 

declare(strict_types=1);

namespace php8\ch05;

class Delegator
{

    private OtherShop $thirdpartyShop;

    public function __construct()
    {
        $this->thirdpartyShop = new OtherShop();
    }

    public function __call(string $method, array $args): mixed 
    {
        if(method_exists($this->thirdpartyShop, $method)) {
            return call_user_func_array(
                [
                    $this->thirdpartyShop,
                    $method
                ],
                $args
            );
        }
    }

}

