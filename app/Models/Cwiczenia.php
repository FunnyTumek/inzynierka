<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cwiczenia extends Model
{
    protected $primaryKey = 'idRodzajeCwiczen';
    protected $table = 'rodzajecwiczen';
    protected $fillable = [
        'Nazwa', 'Opis', 'Zdjecie'
    ];
    use HasFactory;
}
