<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolesHasUser extends Model
{
    protected $primaryKey = 'idRoleUzytkownikow';
    protected $table = 'roleuzytkownikow';
    use HasFactory;
}
