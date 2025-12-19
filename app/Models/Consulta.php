<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
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
