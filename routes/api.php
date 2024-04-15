<?php

use App\Http\Controllers\Api\DeskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('/v1')->group(function () {
    Route::get('/', function () {
        return [];
    });

    Route::apiResources([
        'desks' => DeskController::class
    ]);
});
