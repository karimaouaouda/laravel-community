<?php

namespace LaravelCommunity;

use Illuminate\Contracts\Foundation\Application;
use LaravelCommunity\Facades\LaravelCommunity;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelCommunityServiceProvider extends PackageServiceProvider
{

    public function packageRegistered(): void
    {
        $this->registerComponents();
    }

    public function packageBooted(): void
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

    protected function registerComponents(): void
    {
        $this->app->bind('community', function(Application $app){
            return new CommunityManager($app);
        });
    }

    protected function bootPackage(): void
    {
        LaravelCommunity::registerLivewireComponents();
    }



}
