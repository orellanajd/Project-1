<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoEquipo extends Model
{
    use HasFactory;

    protected $table = 'tipoequipo';
    protected $primaryKey = 'IdTipoEquipo';
    public $timestamps = false;

    protected $fillable = [
        'TipoEquipoDesc',
        'Marca',
    ];


}
