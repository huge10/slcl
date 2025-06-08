<?php

namespace Huge10\Slcl;

use Huge10\Slcl\Commands\SlclCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class SlclServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('slcl')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_slcl_table')
            ->hasCommand(SlclCommand::class);
    }
}
