<?php

Route::group([
    'prefix' => '/admin',
    'namespace' => 'App\Http\Controllers\Admin',
    'as' => 'admin.',
], function () {
    Route::get('/', 'DashboardController@index')->name('dashboard');
});
