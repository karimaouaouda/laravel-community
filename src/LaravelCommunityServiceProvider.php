<?php

namespace LaravelCommunity;

use Illuminate\Contracts\Foundation\Application;
use LaravelCommunity\Facades\LaravelCommunity;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelCommunityServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $this->registerComponents();
        $this->bootPackage();
        $package
            ->name('laravel-community')
            ->hasConfigFile()
            ->hasRoute('community')
            ->hasViews();
    }

    protected function registerComponents(): void
    {
        $this->app->bind('community', function(Application $app){
            return new CommunityManager($app);
        });

        $this->app->bind('community-features', function(Application $app){
            return new CommunityFeatures($app);
        });
    }

    protected function bootPackage(): void
    {
        LaravelCommunity::registerLivewireComponents();
    }



}
