<?php

namespace GiorgiGigauri\TbcBank\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \GiorgiGigauri\TbcBank\TbcBank
 */
class TbcBank extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \GiorgiGigauri\TbcBank\TbcBank::class;
    }
}
