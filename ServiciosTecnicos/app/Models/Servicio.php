<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    protected $table = 'servicio';
    protected $primaryKey = 'IdServicio';
    public $timestamps = false;

    protected $fillable = [
        'IdCliente',
        'IdEmpleado',
        'IdEquipo',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'IdCliente', 'IdCliente');
    }

    public function empleado()
    {
        return $this->belongsTo(Empleado::class, 'IdEmpleado', 'IdEmpleado');
    }

    public function equipo()
    {
        return $this->belongsTo(Equipo::class, 'IdEquipo', 'IdEquipo');
    }
}
