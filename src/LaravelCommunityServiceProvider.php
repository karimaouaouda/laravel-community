<?php

namespace LaravelCommunity;

use LaravelCommunity\Livewire\Community\Post;
use Livewire\Livewire;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelCommunityServiceProvider extends PackageServiceProvider
{

    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-community')
            ->hasConfigFile()
            ->hasViews('community')
            ->hasRoute('community');

        $this->registerLivewireComponents(
            __DIR__ . '/livewire-components.php',
            'community'
        );
    }

    private function registerLivewireComponents($components_file_path = __DIR__ . '/components.php', string $prefix = 'community') : void
    {
        $components = require $components_file_path;
        foreach ($components as $name => $component) {
            Livewire::component("{$prefix}::{$name}", $component);
        }
    }
}
