<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $table = 'empleado';
    protected $primaryKey = 'IdEmpleado';
    public $timestamps = false;

    protected $fillable = [
        'IdTipoEmpleado',
        'IdPersona',
    ];

    public function tipoEmpleado()
    {
        return $this->belongsTo(TipoEmpleado::class, 'IdTipoEmpleado', 'IdTipoEmpleado');
    }

    public function persona()
    {
        return $this->belongsTo(Persona::class, 'IdPersona', 'IdPersona');
    }
}
