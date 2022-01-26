<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    public function hola()
    {
        return "Hola desde PruebaController";
    }
    public function saludoCompleto($name)
    {
        return "Hola $name. Encantado de conocerle";
    }

    public function saludo(Request $request)
    {
        // $informal = $_GET['informal'];
        $informal = $request->input('informal');
        $informal = $request->informal;
        $numeros = [1,2,3,4];
        $all = $request->all();
        // dd($request);
        // if ($informal) {
        //     echo "Hola!!";
        // } else  {
        //     echo "Buenos días";
        // }

        return view('prueba.saludo', [
            'informal' => $informal,
            'numeros' => $numeros
        ]);

        //va a buscar un fichero en el directorio views:
        // existe prueba/saludo.blade.php ??
        // existe prueba/saludo.php ??       
    }
}
