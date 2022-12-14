<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;
    protected $table = 'vehiculo';
    protected $fillable = ['placa', 'marca', 'modelo','capacidad_carga', 'consumo_gasolina', 'user_id'];
    public function Carga()
    {
        return $this->hasMany('App\Models\Carga');
    }
    public function Ruta()
    {
        return $this->hasMany('App\Models\Ruta');
    }
    public function User()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
}

