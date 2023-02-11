<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController; 
use App\Http\Controllers\LlamadaController; 


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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/contact', function(){  return view('contac'); });

Route::get('/prueba', function () {
    // return view('welcome');
    return "Ruta de prueba"; 
});

Route::get('/saludo/{nombre}', function($nombre){
    return "Hola " . $nombre; 
});


Route::get('/saludo/{nombre}/{edad}', function($nombre, $edad){
    return "Hola " . $nombre . " tienes " . $edad . " años.";
});

Route::get('admin/post/example', array('as' => 'admin.home' , function(){
    $url = route('admin.home'); 
    return 'this url is' . $url; 
}));

//Route::get('/post', 'PostController@index'); 
// Route::resource('port', PostController::class);

Route::resource('/post', PostController::class);
Route::resource('/post', PostController::class) ->names(
   ['create' => 'post.create'] 
);
Route::get('/llamada', [LlamadaController::class, 'index']);
Route::get('/llamada/edit/{id}', [LlamadaController::class, 'edit']);


Route::resource('/post/{id}', PostController::class);
Route::resource('/post/{id}/edit', PostController::class); 

Route::get('post/contactPost', 'PostController@contact');

