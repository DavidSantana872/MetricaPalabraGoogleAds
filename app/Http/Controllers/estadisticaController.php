<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class estadisticaController extends Controller

{
    
    public function estadistica_palabra(Request $request)
    {
        $palabra = $request->input('palabra_formulario');
        
         // Almacenar el mensaje en el cache por 5 minutos (300 segundos)
        Cache::put('palabra', $palabra, 300);
         
    
        return response()->json(['mensaje' => "Corecto"]);
    }

    public function resultado(Request $request)
    {
        $valores = Cache::get('palabra');
        // Eliminar un elemento del cache
        Cache::forget('palabra');
        $salida = array(); 
        exec("python3 main.py $valores", $salida);
        // Devolver una respuesta JSON con el valor de $valores
        return response()->json(['mensaje' => $valores,'respuesta' => $salida]);
    }
}

