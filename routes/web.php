<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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
$controllerName='admin';
$prefix='blog';

Route::prefix($prefix)->group(function () use($controllerName){

    $controller='App\\Http\\Controllers\\'.(ucfirst($controllerName)).'Controller@';
    
    Route::get('/',$controller.'index')->name($controllerName)->middleware('check');

    Route::get('/add',$controller.'add')->name($controllerName.'/add');

    Route::post('/add',$controller.'postAdd')->name($controllerName.'/post/add');

    Route::get('/edit/{id}',$controller.'getEdit')->name($controllerName.'/edit');

    Route::post('/edit/{id}',$controller.'postEdit')->name($controllerName.'/post/edit');

    Route::get('/login',$controller.'login')->name($controllerName.'/login');

    Route::get('/delete/{id}',$controller.'delete')->name($controllerName.'/delete');

   
    Route::get('/search',$controller.'index');
    
    Route::post('/search',$controller.'search')->name($controllerName.'/search');   
});


