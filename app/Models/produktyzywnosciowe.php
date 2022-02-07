<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produktyzywnosciowe extends Model
{
    protected $primaryKey = 'idProduktyZywnosciowe ';
    protected $table = 'produktyzywnosciowe';
    protected $fillable = [
        'Nazwa', 'Opis', 'Kalorie', 'Bialko', 'Weglowodany',
    ];
    use HasFactory;
}
