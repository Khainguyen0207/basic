<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => '/admin',
    'namespace' => 'App\Http\Controllers\Admin',
    'as' => 'admin.',
], function () {

    Route::group([
        'middleware' => ['web', 'auth.customer'],
    ], function () {
        Route::get('/', function () {
            return redirect()->route('admin.dashboard');
        });

        Route::get('dashboard', 'DashboardController@index')->name('dashboard');

        Route::resource('customers', 'CustomerController');

        Route::resource('settings', 'SettingController');

        Route::get('logout', 'Authentication@logout')->name('auth.logout');

    });

    Route::group([
        'middleware' => ['guest:customer']
    ], function () {
        Route::get('login', 'Authentication@login')->name('login');
        Route::post('login', 'Authentication@authenticate')->name('login.authenticate');
    });
});
