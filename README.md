# laravel-community
a full community system in ur website (posts, comments, groups ... )

### requirements:
1 - ``php version >= 3.8``\
2 - ``composer version > 2.8``

### installation :
1 - create your laravel project and enter to it:
```shell
laravel new App && cd App
```

2 - install the package using `composer` :
````shell
composer require karimaouaouda/laravel-community
````

3 - **optionally**, you can publish the configuration file and configure you features :
````shell
php artisan vendor:publish 
````
chose community-config

you will find this lines : 
````php
return [
    /**
     *
     * guards : the guards that we will use to retrieve users with
     *
    */
    'guards' => ['web'],

    'features' => [
        LaravelCommunityFeatures::postWithFeelings(),
        //LaravelCommunityFeatures::postWithFile(false),
        //LaravelCommunityFeatures::postWithImage(false),
        //LaravelCommunityFeatures::postWithVideo()
    ],

];
````

feel free to uncomment features to sweet ur needs, if your posts for example contains\
videos, you can uncomment ````LaravelCommunityFeatures::postWithVideo()```` and so on.

4 - run your development server :
`````shell
php artisan serve | composer run dev
`````

you all set, you ready to start post posts just tap : ``localhost:8000/community`` and start discover the magic

