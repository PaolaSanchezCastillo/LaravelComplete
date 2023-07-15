<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
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



    Route::group(['namespace' => 'App\Http\Controllers'], function(){



     Route::get('/', 'HomeController@index') ->name('welcome');
    
// Routes Inicial

    Route::group(['middleware' => ['guest']], function(){
    
        // Register Routes
    Route::get('/registrarse', 'RegisterController@show')->name('register.show');
    Route::post('/registrarse', 'RegisterController@register')->name('register.perform');
    
    Route::get('/login', 'LoginController@show')->name('auth.login');
    Route::post('/login', 'LoginController@login')->name('auth.perform');
    


    });
    // Login 


    // 
    Route::group(['middlelware' => ['auth']], function(){
        // Logout 
     
    Route::get('/logout' , 'LogoutController@performing');

    // Proveedores


    Route::get('/proveedores', 'ProveedorController@index'); 
    // ContactoProveedores
    Route::get('/contactoProveedores', 'ContactoProveedorController@index'); 

        
    });



    
});

   

