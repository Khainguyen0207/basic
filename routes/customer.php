<?php

Route::group([
    'prefix' => '/',
    'namespace' => 'App\Http\Controllers\Customer',
], function () {
    Route::get('/', 'HomepageController@index')->name('homepage');
});
