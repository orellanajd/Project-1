<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    
    protected $table = 'Persona';

    
    protected $primaryKey = 'IdPersona';

    
    protected $fillable = [
        'PrimerNombre',
        'SegundoNombre',
        'PrimerApellido',
        'SegundoApellido',
        'FechaNacimiento',
        'Sexo',
        'Direccion',
        'Telefono'
    ];

    
    public $timestamps = false;
}
