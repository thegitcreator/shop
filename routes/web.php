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

Route::prefix('/tags')->namespace('\App\Http\Controllers\Tag')->group(function() {
    Route::get('/', 'IndexController@index')->name('tag.index');
    Route::get('/create', 'CreateController@create')->name('tag.create');
    Route::post('/', 'StoreController@store')->name('tag.store');
    Route::get('/{tag}/edit', 'EditController@edit')->name('tag.edit');
    Route::get('/{tag}', 'ShowController@show')->name('tag.show');
    Route::patch('/{tag}', 'UpdateController@update')->name('tag.update');
    Route::delete('/{tag}', 'DeleteController@delete')->name('tag.delete');
});

Route::prefix('/colors')->namespace('\App\Http\Controllers\Color')->group(function() {
    Route::get('/', 'IndexController@index')->name('color.index');
    Route::get('/create', 'CreateController@create')->name('color.create');
    Route::post('/', 'StoreController@store')->name('color.store');
    Route::get('/{color}/edit', 'EditController@edit')->name('color.edit');
    Route::get('/{color}', 'ShowController@show')->name('color.show');
    Route::patch('/{color}', 'UpdateController@update')->name('color.update');
    Route::delete('/{color}', 'DeleteController@delete')->name('color.delete');
});

Route::prefix('/users')->namespace('\App\Http\Controllers\User')->group(function() {
    Route::get('/', 'IndexController@index')->name('user.index');
    Route::get('/create', 'CreateController@create')->name('user.create');
    Route::post('/', 'StoreController@store')->name('user.store');
    Route::get('/{user}/edit', 'EditController@edit')->name('user.edit');
    Route::get('/{user}', 'ShowController@show')->name('user.show');
    Route::patch('/{user}', 'UpdateController@update')->name('user.update');
    Route::delete('/{user}', 'DeleteController@delete')->name('user.delete');
});

