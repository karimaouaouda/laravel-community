<?php

namespace LaravelCommunity;


use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\Facades\Config;
use Livewire\Livewire;

/**
 * @method public function hi()
*/

class CommunityFeatures
{
   public function __construct(protected Application $app)
    {
    }

    public static function postWithFeelings(): string
    {
       return 'feeling';
    }

    public static function postWithImage(): string
    {
        return "image";
    }

    public static function postWithFile(): string
    {
        return 'file';
    }

    public static function enabledFeatures(): array
    {
      return Config::get('community.features');
    }

    public static function postWithVideo(): string
    {
        return 'video';
    }

    public static function canPublishWith(string $feature): bool
    {
       return isset(Config::get('community.features', [])[$feature]);
    }
}
