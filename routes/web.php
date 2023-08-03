<?php

use App\Http\Controllers\Admin\IndexController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [IndexController::class, 'adminPanel'])->name('main.index');

Route::prefix('/categories')->namespace('\App\Http\Controllers\Category')->group(function() {
    Route::get('/', 'IndexController@index')->name('category.index');
    Route::get('/create', 'CreateController@create')->name('category.create');
    Route::post('/', 'StoreController@store')->name('category.store');
    Route::get('/{category}/edit', 'EditController@edit')->name('category.edit');
    Route::get('/{category}', 'ShowController@show')->name('category.show');
    Route::patch('/{category}', 'UpdateController@update')->name('category.update');
    Route::delete('/{category}', 'DeleteController@delete')->name('category.delete');
});

