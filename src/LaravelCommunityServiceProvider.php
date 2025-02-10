<?php

namespace LaravelCommunity;

use Illuminate\Contracts\Foundation\Application;
use LaravelCommunity\Facades\LaravelCommunity;
use LaravelCommunity\Facades\LaravelCommunityFeatures;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelCommunityServiceProvider extends PackageServiceProvider
{

    public function packageRegistered(): void
    {

        $this->bootPackage();
    }
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-community')
            ->hasConfigFile()
            ->discoversMigrations(__DIR__.'/../database/migrations')
            ->runsMigrations()
            ->hasRoute('community')
            ->hasViews();
    }


    protected function bootPackage(): void
    {
        LaravelCommunity::registerLivewireComponents();
    }



}
