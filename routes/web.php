<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controlController;
use App\Http\Controllers\searchController;
use App\Http\Controllers\usersController;
use App\Http\Controllers\postController;
use App\Http\Controllers\adminController;

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

Route::get('/', function(){
    return view('project.index');
});

Route::get('/about', function(){
    return view('project.about');
});

Route::get('/product', function(){
    return view('project.product');
});

Route::get('/contact', function(){
    return view('project.contact');
});
Route::get('/login', function(){
    return view('project.login');
});
Route::get('/registrarce', function(){
    return view('project.registrarce');
});
Route::get('/admin', function(){
    return view('project.admin');
});
Route::get('/buscar', function(){
    return view('project.buscar');
});
Route::get('/admin/editar/{id}', function(){
    return view('project.administrador.edit');
});
Route::get('/crearPost', function(){
    return view('project.user.crearPost');
});
route::get('/buscar/{text}', [searchController::class], 'buscar')->name('buscar.item');

Route::get('/', [usersController::class, 'initial'])->name('inicio.page');

//manejo de sesiones
Route::post('/autenticacion', [usersController::class, 'autenticacion'])->name('autenticacionUser.inicio');
Route::get('/inicio/{dato}', [usersController::class, 'inicio'])->name('autenticacion.inicio');
Route::get('/logut', [usersController::class, 'logut'])->name('autenticacion.logut');

//manejo de posteos 
Route::get('/crear/{id}', [postController::class, 'crear'])->name('crear.post');
Route::post('/insertar', [postController::class, 'insertar'])->name('insertar.post');
Route::get('like/{id}', [postController:: class, 'addLike'])->name('add.like');


//gestion crud
Route::post('admin/agregar', [usersController::class, 'store']);
Route::post('admin/agregarR', [usersController::class, 'store2']);
Route::get('/admin', [usersController::class, 'index'])->name('users.index');
Route::get('/index', [usersController::class, 'indexRegistro'])->name('users.indexRegistro');
Route::get('/admin/editar/{id}', [usersController::class, 'editform'])->name('users.edit');
Route::put('/admin/edicion/{id}', [usersController::class, 'update'])->name('users.edicion');
route::get('admin/delete/{id}', [usersController::class, 'destroy'])->name('users.eliminar');


