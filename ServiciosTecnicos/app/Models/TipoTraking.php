<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoTracking extends Model
{
    use HasFactory;

    protected $table = 'tipotracking';
    protected $primaryKey = 'IdTipoTracking';
    public $timestamps = false;

    protected $fillable = [
        'TipoTracking',
    ];

    
}
