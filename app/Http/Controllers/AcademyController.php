<?php

namespace App\Http\Controllers;

use App\Academia;
use Illuminate\Http\Request;

class AcademyController extends Controller
{
    public function register(Request $request){
        $academy = new Academia([
            'aca_nombre' => $request->aca_nombre,
            'aca_status' => $request->aca_status,
            'aca_num_alumnos' => $request->aca_num_alumnos,
            'aca_fecha_corte' => $request->aca_fecha_corte,
            'aca_adeudo' => $request->aca_adeudo,
            'pla_id' => $request->pla_id,
        ]);
        $academy->save();
        return response()->json([
            'id' => $academy->id,
        ], 201);
    }
}
