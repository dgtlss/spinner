<?php

namespace dgtlss\spinner;

use Illuminate\Support\Facades\Facade;

class SpinnerFacade extends Facade
{
    protected static function getFacadeAccessor() { 
        return 'spinner';
    }
}
