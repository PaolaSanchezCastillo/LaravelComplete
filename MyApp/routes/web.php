<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController; 
use App\Http\Controllers\LlamadaController; 
use App\Http\Controllers\NotesController; 
use App\Http\Controllers\ProductsController; 
use App\Http\Controllers\ArchivosFotograficosController; 
use App\Http\Controllers\PDFController; 
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

Route::group(['middleware' => 'web'], function () {

Route::get('/', function () {return view('layouts.app'); });

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
Route::get('/llamada/show/{nombre}/{edad}', [LlamadaController::class, 'showData']);

//Route::resource('/post/{id}', PostController::class);
//Route::resource('/post/{id}/edit', PostController::class); 


Route::get('/insertar', [Notes::class, 'insertar']);
Route::get('/leer', [Notes::class, 'leer']);
Route::get('/actualizar', [Notes::class, 'actualizar']);
Route::get('/eliminar', [Notes::class, 'eliminar']);

// Products

Route::get('/indexProducts', [ProductsController::class, 'index']);
Route::get('/editProduct/{id}', [ProductsController::class, 'edit']);
Route::put('/updateProduct', [ProductsController::class, 'update']);
Route::get('/deleteProduct/{id}', [ProductsController::class, 'eliminaProducto']);

Route::get('/exportExcel', [ProductsController::class, 'exportProduct']);



// Archivos Fotograficos

Route::get('indexArchivosFotograficos', [ArchivosFotograficosController::class, 'index']); 
Route::post('guardarArchivoFotografico','App\Http\Controllers\ArchivosFotograficosController@store');


Route::get('/leerTodos', [NotesController::class, 'leerTodos']);



Route::get('post/contactPost', 'PostController@contact');
Route::get('/post/showData', 'PostController@showData');

Route::get('/llamada/blades', [LlamadaController::class, 'blades']);


Route::get('generate-pdf', [PDFController::class, 'generatePDF']); 

Route::get('/sendMail', [App\Http\Controllers\PruebaMailController::class, 'index']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/sendMail', [App\Http\Controllers\PruebaMailController::class, 'index']);
Route::get('/sendMailconAdjunto', [App\Http\Controllers\PruebaMailController::class, 'pruebaMailAdjunto']);




});