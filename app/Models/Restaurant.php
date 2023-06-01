<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'address',
        'PIVA',
        'image',
        'prezzo_spedizione',
        'user_id',
    ];
}
