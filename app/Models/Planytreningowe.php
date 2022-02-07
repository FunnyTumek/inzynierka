<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planytreningowe extends Model
{
    protected $primaryKey = 'idPlanyTreningowe';
    protected $table = 'planytreningowe';
    protected $fillable = [
        'Nazwa', 'Opis', 'PrzewidywanyCzasWykonywania', 'LiczbaKaloriiDoSpalenia', 'idTrener'
    ];
    use HasFactory;

    public function trenerzy(){

        return $this->belongsTo(User::class, 'idTrener', 'idUzytkownicy');

    }

}
