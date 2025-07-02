<?php

use App\Http\Middleware\VerifyWebMiddleware;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => '/api/v1',
    'namespace' => 'App\Http\Controllers\API',
    'middleware' => VerifyWebMiddleware::class
], function () {
    Route::group([
        'middleware' => ['web'],
    ], function () {
        Route::get('customers', 'PublicController@customers');
    });
});
