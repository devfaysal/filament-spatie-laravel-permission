<?php

namespace Devfaysal\FilamentSpatieLaravelPermission\Commands;

use Illuminate\Console\Command;

class FilamentSpatieLaravelPermissionCommand extends Command
{
    public $signature = 'filament-spatie-laravel-permission';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
