<?php

use Illuminate\Support\Facades\Route;


Route::middleware('web')
    ->prefix('community')
    ->group(function(){
        Route::get('/', [\LaravelCommunity\Http\MainController::class, 'index'])->name('community.index');
    });
