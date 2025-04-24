<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;

class ImcController extends Controller
{
    public function index()
    {
        return view('imc.formulario');
    }

    public function calcular(Request $request)
    {
        $pessoa = new Pessoa(
            nome: $request->input('nome'),
            nascimento: $request->input('nascimento'),
            peso: (float) $request->input('peso'),
            altura: (float) $request->input('altura')
        );

        return view('imc.resultado', compact('pessoa'));
    }
}
