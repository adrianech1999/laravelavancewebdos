<?php

use App\Articulo;
use App\Calification;
use App\Sucursal;
use App\User;
use App\Cargo;
use App\Permiso;
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

Route::resource('/provider', 'ProviderController');

Route::get('/califications/{id}', function($id){
    return Calification::find($id)->calificationable;
});

Route::get('/articulos/{id}/califications', function ($id) {
    $califications=Articulo::find($id);
    return $califications->califications;
});

Route::get('/sucursales/{id}/califications', function ($id) {
    $califications = Sucursal::find($id)->califications;    
    return $califications;
});

Route::get('/permisos/{id}/users', function ($id) {
    $usuarios=Permiso::find($id)->users;
    return $usuarios;
});

Route::get('/users/{id}/permisos', function ($id) {
    $permisos=User::find($id)->permisos;
    return $permisos;
});

Route::get('/articulos/{id}/sucursal', function ($id) {
    return Articulo::find($id)->sucursal;
});

Route::get('/sucursales/{id}/articulos', function ($id) {
    return Sucursal::find($id)->articulos;
});

Route::get('/cargos/{id}/user', function($id){
    return Cargo::find($id)->user;
});

Route::get('users/{id}/cargo', function ($id) {
    return User::find($id)->cargo;    
});

Route::get('/users/create', function(){
    DB::insert('insert into users (name, email, password, admin) values (?, ?, ?, ?)', ['Dayle', 'dayle@gmail.com', '123456789', true]);
});
Route::get('/users', function(){
    $data=DB::select('select * from users');
    return $data;
});

Route::get('/sucursales', 'SucursalesController');
Route::post('/sucursales/create', 'SucursalesController@create');
Route::get('/sucursales/update', 'SucursalesController@update');
Route::get('/sucursales/delete', 'SucursalesController@delete');

Route::get('/sucursales/softdelete', function(){
    $sucursal=Sucursal::find(2);
    $sucursal->delete();
});

Route::get('/sucursales/show', 'SucursalesController@show');

Route::get('/sucursales/restore', function(){
    Sucursal::withTrashed()->restore();
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/acercadenosotros', 'AcercadenosotrosController');

Route::get('/contacto', function(){
    return view('contacto');
});

Route::get('productos/', function () {
    $data = DB::select('select * from articulos');
    return view('productos')->with('productos', $data);
});

Route::get('productos/insert', function () {
    DB::insert('insert into articulos(nombre, precio, pais_de_origen, observaciones, comentarios) values(?, ?, ?, ?, ?)', 
    ['Mesas', 100, 'Persia', 'Usado', 'Buen producto']);    
});

Route::get('productos/update', function () {
    DB::update('update articulos set nombre = ? where id = ?', ['Jarrones', 1]);
});

Route::get('productos/delete', function () {
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
