<?php

namespace Devfaysal\FilamentSpatieLaravelPermission\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use Devfaysal\FilamentSpatieLaravelPermission\FilamentSpatieLaravelPermissionServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Devfaysal\\FilamentSpatieLaravelPermission\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            FilamentSpatieLaravelPermissionServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_filament-spatie-laravel-permission_table.php.stub';
        $migration->up();
        */
    }
}
