<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{
    use HasFactory;

    protected $table = 'tracking';
    protected $primaryKey = 'IdTracking';
    public $timestamps = false;

    protected $fillable = [
        'IdServicio',
        'IdTipoTracking',
        'Fecha',
    ];

    
}
