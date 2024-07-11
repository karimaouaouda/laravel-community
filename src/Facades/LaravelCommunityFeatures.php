<?php

namespace LaravelCommunity\Facades;


use Illuminate\Support\Facades\Facade;

/**
 * @method static void postWithFeelings()
 * @method static void postWithImage(bool $multiImage = false)
 * @method static void postWithFile(bool $multiFile = false)
 * @method static void postWithVideo()
 * @method static bool canPublishWith(string $feature)
*/

class LaravelCommunityFeatures extends Facade
{
    public static function getFacadeAccessor(): string
    {
        return 'community-features';
    }
}
