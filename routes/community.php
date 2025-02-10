<?php

use Illuminate\Support\Facades\Route;


Route::middleware('web')
    ->group(function(){
        Route::get('/hello', function(){
            new \LaravelCommunity\Models\LaravelCommunity\Post();
            return view('community::index');
        });
    });
