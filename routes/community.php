<?php

use Illuminate\Support\Facades\Route;


Route::middleware('web')
    ->prefix('community')
    ->group(function() {
        Route::get('/', [\LaravelCommunity\Http\MainController::class, 'index'])
            ->name('community.index');

        Route::get('/@{username}', [\LaravelCommunity\Http\MainController::class, 'profile'])
            ->name('profile');

        Route::get('/posts/{post}', [\LaravelCommunity\Http\MainController::class, 'viewPost'])
            ->name('post');
    });
