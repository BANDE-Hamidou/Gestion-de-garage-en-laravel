<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Annexe extends Model
{
    use HasFactory;

    protected $fillable = [
        "nom",
        "localisation",
    ];

    public function vehicules(): HasMany
    {
        return $this->hasMany(Vehicule::class);
    }
}
