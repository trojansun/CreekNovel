<?php

use App\Http\Controllers\DictTypeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return inertia('Welcome');
});


Route::prefix("/system")->group(function () {
    Route::controller(DictTypeController::class)->group(function () {
        Route::get('dictType', 'index');
    });
});
