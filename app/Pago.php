<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    protected $table = 'pago';
    protected $fillable = [
        'pag_id', 'pag_fecha', 'pag_cantidad', 'aca_id',
    ];
}
