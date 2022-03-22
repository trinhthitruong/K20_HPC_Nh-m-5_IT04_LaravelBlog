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

    Route::post('/add',$controller.'postAdd')->name($controllerName.'/add');

    Route::get('/register',$controller.'register')->name($controllerName.'/register');
   
    Route::get('/search',$controller.'index');
    
    Route::post('/search',$controller.'search')->name($controllerName.'/search');   
});


