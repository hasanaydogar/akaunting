<?php

use Illuminate\Support\Facades\Route;
use Modules\Work\Http\Controllers\WorkController;

/**
 * 'admin' middleware and 'work' prefix applied to all routes (including names)
 *
 * @see \App\Providers\Route::register
 */

Route::admin('work', function () {

    Route::group(['prefix' => 'loads', 'as' => 'loads.'], function () {
        Route::get('/', function(){
            return view('work::loads.index' );
        })->name('index');

        Route::get('/create',function(){
            return view('work::loads.create' );
        })->name('create');

    });

});

//Route::get('/', [WorkController::class, 'index'])->name('index');
//Route::get('/create',[WorkController::class, 'create'] )->name('create');
