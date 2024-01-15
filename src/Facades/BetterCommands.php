<?php

namespace Hrsa\BetterCommands\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Hrsa\BetterCommands\BetterCommands
 */
class BetterCommands extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Hrsa\BetterCommands\BetterCommands::class;
    }
}
