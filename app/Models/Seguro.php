<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seguro extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($seguro) {
            if (empty($seguro->numero_seguro)) {
                $seguro->numero_seguro = (static::max('numero_seguro') ?? 0) + 1;
            }
        });
    }

    public function contratante()
    {
        return $this->belongsTo(Contratante::class);
    }

    public function vehiculo()
    {
        return $this->belongsTo(Vehiculo::class);
    }

    public function garantia()
    {
        return $this->belongsTo(Garantia::class);
    }
}
