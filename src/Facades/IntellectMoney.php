<?php

namespace Daaner\IntellectMoney\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Daaner\IntellectMoney
 */
class IntellectMoney extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'intellectmoney';
    }
}
