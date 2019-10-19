<?php

namespace App\Http\Controllers;

use App\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function register(Request $request){
        $plan = new Plan([
            'pla_nombre' => $request->pla_nombre,
            'pla_tipo_plan' => $request->pla_tipo_plan,
            'pla_precio' => $request->pla_precio,
            'pla_descripcion' => $request->pla_descripcion,
            'pla_numero_alumnos' => $request->pla_numero_alumnos,
        ]);
        $plan->save();
        return response()->json([
            'id' => $plan->id,
        ], 201);
    }
}
