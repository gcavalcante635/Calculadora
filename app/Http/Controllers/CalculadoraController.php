<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function soma()
    {
       return view ('soma');
    }
    public function subtracao()
    {
       return view ('subtracao');
    } 
    public function multiplicacao()
    {
       return view ('multiplicacao');
    }
    public function divisao()
    {
       return view ('divisao');
    }
    public function menu()
    {
       return view ('menu');
    }
    public function calcularSoma(Request $request)
    {
        // dd($request->all());
        $valor1 = $request->valor1; 
        $valor2 = $request->valor2; 
        $resultado = $valor1 + $valor2;

        return view('resultadoSoma', compact('valor1', 'valor2', 'resultado'));
    }
    public function calcularSubtracao(Request $request)
    {
        $valor1 = $request->valor1; 
        $valor2 = $request->valor2; 
        $resultado = $valor1 - $valor2;

        return view('resultadoSubtracao', compact('valor1', 'valor2', 'resultado'));
    }
    public function calcularMultiplicacao(Request $request)
    {
        $valor1 = $request->valor1; 
        $valor2 = $request->valor2; 
        $resultado = $valor1 * $valor2;

        return view('resultadoMultiplicacao', compact('valor1', 'valor2', 'resultado'));
    }
    public function calcularDivisao(Request $request)
    {
        $valor1 = $request->valor1; 
        $valor2 = $request->valor2; 
        $resultado = $valor1 / $valor2;

        return view('resultadoDivisao', compact('valor1', 'valor2', 'resultado'));
    }
}
