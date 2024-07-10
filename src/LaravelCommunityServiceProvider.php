<?php

namespace LaravelCommunity;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelCommunityServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-community')
            ->hasConfigFile()
            ->hasRoute('community');
    }
}
