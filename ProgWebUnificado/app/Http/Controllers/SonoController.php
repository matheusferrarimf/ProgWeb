<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sono;

class SonoController extends Controller
{
    public function index()
    {
        return view('sono.formulario');
    }

    public function avaliar(Request $request)
    {
        $sono = new Sono(
            nome: $request->input('nome'),
            nascimento: $request->input('nascimento'),
            horas: (float) $request->input('sono')
        );

        return view('sono.resultado', compact('sono'));
    }
}
