<?php

namespace Spham\LaravelTags;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Spham\LaravelTags\Commands\LaravelTagsCommand;

class LaravelTagsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-tags')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-tags_table')
            ->hasCommand(LaravelTagsCommand::class);
    }
}
