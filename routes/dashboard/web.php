<?php

use Illuminate\Support\Facades\Route;

Route::prefix('dashboard')->name('dashboard.')->group(function() {
    Route::get('/', 'DashboardController@index')->name('index');
}); // end of dashboard routes
