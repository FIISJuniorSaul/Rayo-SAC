<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Provincia;
use App\Models\Ruta;
use Illuminate\Http\Request;

class RutaController extends Controller
{
    public function index(){
        $ruta_i=Ruta::get();
        return view('admin.operaciones.rutas.index', compact('ruta_i'));
    }
    public function create() {
        $departamentos= Departamento::get();
        $provs= Provincia::join('departamentos','provincias.departamento_id','=','departamentos.id')->select('pronvincias.id','provincias.nombre as provincia_nombre','departamentos.id','departamentos.nombre as departamento_nombre','provincias.departamento_id');
        return view('admin.operaciones.rutas.createRutas', compact('departamentos','provs'));
     }
    public function store(Request $request){
        $ruta_i = new Ruta($request->all());
        $ruta_i->save();
        return redirect()->route('rutasdestino.index')->with('success', 'La ruta ha sido creado correctamente.');
    }
    public function destroy($id){
        $ruta_i = Ruta::findOrFail($id);
        $ruta_i->delete();
        return redirect()->route('rutasdestino.index')->with('success', 'La ruta ha sido eliminado correctamente.');
    }
    /*
    public function listarDepartamento(){
        $departamentos= Departamento::get();
        return view('admin.operaciones.rutas.createRutas');
    }
    */
}
