<?php

namespace LaravelCommunity;


use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\Facades\Config;
use LaravelCommunity\Enums\PostFeatures;
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
       return PostFeatures::FEELING->value;
    }

    public static function postWithImage(): string
    {
        return PostFeatures::IMAGE->value;
    }

    public static function postWithFile(): string
    {
        return PostFeatures::FILE->value;
    }

    public static function enabledFeatures(): array
    {
      return Config::get('community.features');
    }

    public static function postWithVideo(): string
    {
        return PostFeatures::VIDEO->value;
    }

    public static function canPublishWith(PostFeatures $feature): bool
    {
        return  array_search($feature->value, Config::get('community.features', [])) !== false;
    }
}
