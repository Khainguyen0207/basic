<?php

Route::group([
    'prefix' => '/admin',
    'namespace' => 'App\Http\Controllers\Admin',
    'as' => 'admin.',
], function () {

    Route::get('/', function () {
        return redirect()->route('admin.dashboard');
    });

    Route::get('dashboard', 'DashboardController@index')->name('dashboard');

    Route::resource('customers', 'CustomerController');

//    Route::resource('au', 'CustomerController');
    Route::get('login', function () {
        return admin_template_basic_view('auth.login');
    })->name('login');

    Route::get('register', function () {
        return admin_template_basic_view('auth.register');
    })->name('register');
//    Route::get('login', 'CustomerController');

    Route::resource('settings', 'SettingController');
});
