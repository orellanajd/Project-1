<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoServicio extends Model
{
    use HasFactory;

    protected $table = 'infoservicio';
    protected $primaryKey = 'IdInfoServicio';
    public $timestamps = false;

    protected $fillable = [
        'IdServicio',
        'Solucion',
    ];

    public function servicio()
    {
        return $this->belongsTo(Servicio::class, 'IdServicio', 'IdServicio');
    }
}
