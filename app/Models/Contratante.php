<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Contratante extends Model
{
    protected $guarded = [];

    public function seguros(): HasMany
    {
        return $this->hasMany(Seguro::class);
    }
}
