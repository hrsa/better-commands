<?php

namespace Hrsa\BetterCommands;

use Hrsa\BetterCommands\Commands\RedoCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Hrsa\BetterCommands\Commands\BetterCommandsCommand;

class BetterCommandsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('better-commands')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_better-commands_table')
            ->hasCommand(RedoCommand::class);
    }
}
