<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class SonoController extends Controller
{
    public function index()
    {
        return view('formulario');
    }

    public function avaliar(Request $request)
    {
        $nome = $request->input('nome');
        $nascimento = Carbon::parse($request->input('nascimento'));
        $idade = $nascimento->age;
        $sono = (float) $request->input('sono');

        $qualidade = match (true) {
            $idade < 5  => $sono >= 10 ? 'Bom' : 'Insuficiente',
            $idade < 13 => $sono >= 9  ? 'Bom' : 'Insuficiente',
            $idade < 18 => $sono >= 8  ? 'Bom' : 'Insuficiente',
            $idade < 60 => $sono >= 7  ? 'Bom' : 'Insuficiente',
            default     => $sono >= 7  ? 'Bom' : 'Insuficiente',
        };

        return view('resultado', compact('nome', 'idade', 'sono', 'qualidade'));
    }
}
