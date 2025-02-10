<?php

use Illuminate\Support\Facades\Route;



Route::prefix('community')
    ->middleware('web')
    ->group(function(){
    Route::controller(\LaravelCommunity\Http\MainController::class)
        ->group(function(){
            Route::get('/', 'index');
        });
});
