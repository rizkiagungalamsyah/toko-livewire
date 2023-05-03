<?php

namespace App\Facedes;

use Illuminate\Support\Facades\Facade;

class Cart extends Facade
{
    public static function getFacadeAcessor()
    {
        return 'cart';
    }
}
