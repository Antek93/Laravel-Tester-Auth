<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $table = 'restaurants';
    // per specificare a quale tabella questo model è associata
    // Normalmente l'ORM è in grado di riconoscere di quale tabella parliamo
    // rispettando la convenzione di denominazione

    protected $fillable = [
        'nome',
        'address',
        'PIVA',
        'image',
        'prezzo_spedizione',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
