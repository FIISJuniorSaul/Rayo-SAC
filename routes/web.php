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
    Route::get('/operaciones/clientes/contacto/add',function () {
        return view('admin.operaciones.clientes.contacto.create');
    });
   /* rutas-cliente-empresa*/
    Route::get('/operaciones/clientes/empresa', function () {
        return view('admin.operaciones.clientes.empresa.index');
    });
    Route::get('/operaciones/clientes/empresa/crear',function () {
        return view('admin.operaciones.clientes.empresa.crear');
    });
    /* rutas-cotizacion*/
    Route::get('/operaciones/cotizar', function () {
        return view('/admin/operaciones/cotizar.index');
    });
    Route::get('/operaciones/cotizar/add', function () {
        return view('/admin/operaciones/cotizar.createCotizacion');
    });


   /* rutas-cliente-empresa*/
    Route::get('/operaciones/clientes', function () {
        return view('admin.operaciones.clientes.index');
    });
    Route::get('/operaciones/clientes/index', function () {
        return view('admin.operaciones.clientes.index');
    });
    Route::get('/operaciones/clientes/crear', function () {
        return view('admin.operaciones.clientes.crear');
    });
    Route::get('/operaciones/clientes/indexClienteNatural', function () {
        return view('admin.operaciones.clientes.indexClienteNatural');
    });
    Route::get('/operaciones/clientes/crearPersonaNatural', function () {
        return view('admin.operaciones.clientes.crearPersonaNatural');
    });
        /* rutas facturación*/
    Route::get('/facturacion/factura', function () {
        return view('admin.facturacion.factura.index');
    });

        /* rutas reporte-cliente*/
    Route::get('/reportes/clienteReport', function () {
        return view('admin.reportes.clienteReport.index');
    });
        /* rutas reporte-rutas*/
    Route::get('/reportes/rutaReport', function () {
        return view('admin.reportes.rutaReport.index');
    });
        /* rutas reporte-usuario*/
    Route::get('/reportes/usuarioReport', function () {
        return view('admin.reportes.usuarioReport.index');
    });
        /* rutas reporte-vehiculo*/
    Route::get('/reportes/vehiculoReport', function () {
        return view('admin.reportes.vehiculoReport.index');
    });

        //Consulta Sunat
    Route::get(
                '/consultarruc',
                'App\Http\Controllers\CosultaSunatController@buscarRuc'
            )->name('buscarsunat');
});

Route::resource('vehiculos', VehiculoController::class);

