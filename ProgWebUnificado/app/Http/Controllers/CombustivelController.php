<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Viagem;

class CombustivelController extends Controller
{
    public function index()
    {
        return view('combustivel.formulario');
    }

    public function calcular(Request $request)
    {
        $viagem = new Viagem(
            combustivel: $request->input('combustivel'),
            valorLitro: (float) $request->input('valor'),
            distancia: (float) $request->input('distancia'),
            consumo: (float) $request->input('consumo')
        );

        return view('combustivel.resultado', compact('viagem'));
    }
}

