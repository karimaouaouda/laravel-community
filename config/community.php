<?php
/**
 * @brief this is the configuration file for the package
 * package : karimaouaouda/laravel-community
 *
 * we tried to make the package more customizable as a possible
 * we will let comments on top of every configuration keys
 * this will help you to better understand the configs
*/
use LaravelCommunity\Facades\LaravelCommunityFeatures;

return [
    /**
     * LICENSE_KEY : is the license key you will get from the package website
     * for now it's free so there is no api key
    */
    'LICENSE_KEY' => env('LARAVEL_COMMUNITY_API_KEY', 'dev-license'),

    /**
     *
     * guards : the guards that we will use to retrieve users with
     *
    */
    'guards' => ['web'],

    'features' => [
        //LaravelCommunityFeatures::postWithFeelings(),
        //LaravelCommunityFeatures::postWithFile(false),
        //LaravelCommunityFeatures::postWithImage(false),
        //LaravelCommunityFeatures::postWithVideo()
    ],



    ];
