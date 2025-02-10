<?php

namespace LaravelCommunity;


use Illuminate\Contracts\Foundation\Application;
use Livewire\Livewire;

/**
 * @method public function hi()
*/

class CommunityManager
{
   public function __construct(protected Application $app)
    {
    }
    public function hi(): string
    {
        return $this->app->getLocale();
    }

    private function livewireComponents(){
       return require(__DIR__ . '/components.php');
    }


    public function registerLivewireComponents(string $prefix = "community"): void
    {
       foreach ($this->livewireComponents() as $key => $class){
           Livewire::component("{$prefix}::{$key}", $class);
       }
    }
}
