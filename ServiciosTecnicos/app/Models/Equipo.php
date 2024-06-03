<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    protected $table = 'equipo';
    protected $primaryKey = 'IdEquipo';
    public $timestamps = false;

    protected $fillable = [
        'IdTipoEquipo',
        'Estado',
    ];

    public function tipoEquipo()
    {
        return $this->belongsTo(TipoEquipo::class, 'IdTipoEquipo', 'IdTipoEquipo');
    }
}
