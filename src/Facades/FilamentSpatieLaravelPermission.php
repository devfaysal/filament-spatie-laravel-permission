<?php

namespace Devfaysal\FilamentSpatieLaravelPermission\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Devfaysal\FilamentSpatieLaravelPermission\FilamentSpatieLaravelPermission
 */
class FilamentSpatieLaravelPermission extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'filament-spatie-laravel-permission';
    }
}
