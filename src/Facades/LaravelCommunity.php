<?php

namespace LaravelCommunity\Facades;


use Illuminate\Support\Facades\Facade;

/**
 * @method static string hi()
 * @method static void registerLivewireComponents()
*/

class LaravelCommunity extends Facade
{
    public static function getFacadeAccessor(): string
    {
        return 'community';
    }
}
