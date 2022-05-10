<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', \App\Http\Controllers\Main\IndexController::class)->name('main.index');

Route::group([ 'prefix' => 'categories'], function(){
    Route::get( '/', \App\Http\Controllers\Category\IndexController::class)->name(name: 'category.index');
    Route::get( '/create', \App\Http\Controllers\Category\CreateController::class)->name( name: 'category.create' );
    Route::post( '/', \App\Http\Controllers\Category\StoreController::class)->name(name: 'category.store');
    Route::get( '/{category}/edit', \App\Http\Controllers\Category\EditController::class)->name( name: 'category.edit');
    Route::get( '/{category}', \App\Http\Controllers\Category\ShowController::class)->name(name: 'category.show');
    Route::patch( '/{category}', \App\Http\Controllers\Category\UpdateController::class)->name(name: 'category.update');
    Route::delete( '/{category}', \App\Http\Controllers\Category\Deletecontroller::class)->name( name: 'category.delete');
});

Route::group([ 'prefix' => 'tags'], function(){
    Route::get( '/', \App\Http\Controllers\Tag\IndexController::class)->name(name: 'tag.index');
    Route::get( '/create', \App\Http\Controllers\Tag\CreateController::class)->name( name: 'tag.create' );
    Route::post( '/', \App\Http\Controllers\Tag\StoreController::class)->name(name: 'tag.store');
    Route::get( '/{tag}/edit', \App\Http\Controllers\Tag\EditController::class)->name( name: 'tag.edit');
    Route::get( '/{tag}', \App\Http\Controllers\Tag\ShowController::class)->name(name: 'tag.show');
    Route::patch( '/{tag}', \App\Http\Controllers\Tag\UpdateController::class)->name(name: 'tag.update');
    Route::delete( '/{tag}', \App\Http\Controllers\Tag\Deletecontroller::class)->name( name: 'tag.delete');
});

Route::group([ 'prefix' => 'colors'], function(){
    Route::get( '/', \App\Http\Controllers\Color\IndexController::class)->name(name: 'color.index');
    Route::get( '/create', \App\Http\Controllers\Color\CreateController::class)->name( name: 'color.create' );
    Route::post( '/', \App\Http\Controllers\Color\StoreController::class)->name(name: 'color.store');
    Route::get( '/{color}/edit', \App\Http\Controllers\Color\EditController::class)->name( name: 'color.edit');
    Route::get( '/{color}', \App\Http\Controllers\Color\ShowController::class)->name(name: 'color.show');
    Route::patch( '/{color}', \App\Http\Controllers\Color\UpdateController::class)->name(name: 'color.update');
    Route::delete( '/{color}', \App\Http\Controllers\Color\Deletecontroller::class)->name( name: 'color.delete');
});