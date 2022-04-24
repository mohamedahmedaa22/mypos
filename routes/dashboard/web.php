<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){
    Route::prefix('dashboard')->name('dashboard.')->group(function() {
        Route::get('/', 'DashboardController@index')->name('index');
    }); // end of dashboard router
}); // end of localization prefix


