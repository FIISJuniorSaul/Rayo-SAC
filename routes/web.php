<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\UsersController;

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
    return view('auth.login');
});

Auth::routes();



//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {


    Route::get('/main', function () {
        return view('admin.desktop');
    })->name('main');
    /*Route::get('/configuracion/usuario', function () {
        return view('admin.configuracion.usuario.index');
    });*/
    //Route::resource('user', PersonaController::class);

    Route::resource('usuario', UsersController::class);

/* rutas-usuario*/
    Route::get('/configuracion/usuario/add', function () {
        return view('admin.configuracion.usuario.add');
    });
    Route::get('/configuracion/infoempresa', function () {
        return view('admin.configuracion.infoempresa.modifi');
    });
 /* rutas-vehiculos*/
    Route::get('/operaciones/vehiculos', function () {
        return view('admin.operaciones.vehiculos.index');
    });
    Route::get('/operaciones/vehiculos/add', function () {
        return view('admin.operaciones.vehiculos.create');
    });

   /* rutas-rutas*/
    Route::get('/operaciones/rutas', function () {
        return view('admin.operaciones.rutas.index');
    });
    Route::get('/operaciones/rutas/add', function () {
        return view('admin.operaciones.rutas.createRutas');

    });
    /* rutas-cliente-contactos*/
    Route::get('/operaciones/clientes/contacto', function () {
        return view('admin.operaciones.clientes.contacto.index');
    });

   /* rutas-cliente-empresa*/
    Route::get('/operaciones/clientes/empresa', function () {
        return view('admin.operaciones.clientes.empresa.index');
    });

});

Route::resource('vehiculos', VehiculoController::class);
