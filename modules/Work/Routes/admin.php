<?php

use Illuminate\Support\Facades\Route;

/**
 * 'admin' middleware and 'work' prefix applied to all routes (including names)
 *
 * @see \App\Providers\Route::register
 */

Route::admin('work', function () {
    Route::get('/', function () {
        return view('work::loads.index');
    })->name('loads.index');
});
