<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $guarded = [];

    public function claseVehiculo()
    {
        return $this->belongsTo(ClaseVehiculo::class);
    }

    public function tipoVehiculo()
    {
        return $this->belongsTo(TipoVehiculo::class);
    }

    public function marcaVehiculo()
    {
        return $this->belongsTo(MarcaVehiculo::class);
    }

    public function modeloVehiculo()
    {
        return $this->belongsTo(ModeloVehiculo::class);
    }

    public function colorVehiculo()
    {
        return $this->belongsTo(ColorVehiculo::class);
    }

    public function usoVehiculo()
    {
        return $this->belongsTo(UsoVehiculo::class);
    }
}
