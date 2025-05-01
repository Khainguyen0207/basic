<?php

Route::group([
    'prefix' => '/',
    'namespace' => 'App\Http\Controllers\Customer',
    'as' => 'admin.',
], function () {
    Route::get('/', 'HomepageController@index')->name('homepage');
});
