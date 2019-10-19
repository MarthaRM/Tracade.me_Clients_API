<?php

namespace App\Http\Controllers;

use App\Pago;
use Illuminate\Http\Request;

class PagoController extends Controller
{
    public function register(Request $request){
        $pago = new Pago([
            'pag_fecha' => $request->pag_fecha,
            'pag_cantidad' => $request->pag_cantidad,
            'aca_id' => $request->aca_id,
        ]);
        $pago->save();
        return response()->json([
            'id' => $pago->id,
        ], 201);

    }
}
