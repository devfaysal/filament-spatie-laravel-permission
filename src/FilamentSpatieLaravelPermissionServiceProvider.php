<?php

namespace Devfaysal\FilamentSpatieLaravelPermission;

use Devfaysal\FilamentSpatieLaravelPermission\Filament\Resources\PermissionResource;
use Devfaysal\FilamentSpatieLaravelPermission\Filament\Resources\RoleResource;
use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class FilamentSpatieLaravelPermissionServiceProvider extends PluginServiceProvider
{
    protected array $resources = [
        PermissionResource::class,
        RoleResource::class,
    ];

    public function configurePackage(Package $package): void
    {
        $package->name('filament-spatie-laravel-permission');
    }
}
