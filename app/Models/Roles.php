<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $primaryKey ='idRole';
    protected $table = 'role';
    use HasFactory;
}
