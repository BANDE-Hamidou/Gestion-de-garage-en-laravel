<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vehicule extends Model
{
    use HasFactory;
    protected $fillable = [
        'marque',
        'couleur',
        'annee',
        'prix',
        'image',
    ];

    public function annexe():BelongsTo
    {
        return $this->belongsTo(Annexe::class);
    }
}

