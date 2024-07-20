<?php

use App\Http\Controllers\DictDataController;
use App\Http\Controllers\DictTypeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return inertia('Welcome');
});


Route::prefix("/system")->group(function () {
    Route::controller(DictTypeController::class)->group(function () {
        Route::get('dict_type', 'index');
    });


    Route::controller(DictDataController::class)->group(function () {
        Route::get('dict_data', 'index')->name('dictData.index');
    });

});
