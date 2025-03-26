<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CombustivelController extends Controller
{
    public function index()
    {
        return view('formulario');
    }

    public function calcular(Request $request)
    {
        $combustivel = $request->input('combustivel');
        $valor = (float) $request->input('valorcombustivel');
        $distancia = (float) $request->input('distancia');
        $consumo = (float) $request->input('consumo');

        if ($consumo <= 0) {
            return redirect('/')->with('error', 'Consumo do veículo deve ser maior que 0.');
        }

        $litrosUsados = $distancia / $consumo;
        $gasto = $litrosUsados * $valor;

        return view('resultado', compact('combustivel', 'gasto'));
    }
}
