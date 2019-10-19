<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Academia extends Model
{
    protected $table = 'academia';
    protected $fillable = [
        'aca_nombre', 'aca_status', 'aca_fecha_corte', 'aca_num_alumnos', 'aca_adeudo', 'pla_id',
    ];
}
