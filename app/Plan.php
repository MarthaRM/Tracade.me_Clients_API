<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $table = 'plan';
    protected $fillable = [
        'pla_nombre', 'pla_tipo_plan', 'pla_precio', 'pla_descripcion', 'pla_numero_alumnos'
    ];

}
