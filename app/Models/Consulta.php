<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Consulta extends Model
{
     use SoftDeletes;
    protected $table = 'consultas';
    protected $fillable=[
        'paciente',
        'telefono',
        'fecha',
        'estado',
        'is_active',
    ];
        protected $casts = [
        'is_active' => 'boolean',
    ];





}
