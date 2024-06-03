<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoEmpleado extends Model
{
    use HasFactory;

    protected $table = 'tipoempleado';
    protected $primaryKey = 'IdTipoEmpleado';
    public $timestamps = false;

    protected $fillable = [
        'TipoEmpleadoDesc',
    ];

    
}
