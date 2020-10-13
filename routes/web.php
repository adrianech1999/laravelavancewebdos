<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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


Route::get('articulos/', function () {
    $data = DB::select('select * from articulos');
    return view('welcome')->with('articulos', $data);
});

Route::get('articulos/insert', function () {
    DB::insert('insert into articulos(nombre, precio, pais_de_origen, observaciones, comentarios) values(?, ?, ?, ?, ?)', 
    ['Mesas', 100, 'Persia', 'Usado', 'Buen producto']);    
});

Route::get('articulos/update', function () {
    DB::update('update articulos set nombre = ? where id = ?', ['Jarrones', 1]);
});

Route::get('articulos/delete', function () {
    DB::delete('delete from articulos where id = ?', [1]);    
});

//Route::resource('posts', 'PruebadosController');



//Route::get('posts/{id}', 'PruebaunoController@posts');



/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('acercadenosotros', function(){
    return 'Esta es la pagina de informacion de nosotros';
});

Route::get('contacto', function(){
    return 'Esta es la pagina de contacto';
});

Route::get('posts/{id}', function($id){
    return 'Este es el post nro ' . $id;
});

Route::get('profile/{id}', function($id){
    return "Este es el perfirl del usuario con el id nro: ". $id;
})->where('id', '[0-9]+');
*/
