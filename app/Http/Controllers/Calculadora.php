<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\CalcModel;

class Calculadora extends Controller
{
    public function index() {
        return view('calculadora');
    }

    public function store(Request $request) {
        
        CalcModel::create([
        'nome' =>  $request -> nome,
        'nota1' => $request -> nota1,
        'nota2' => $request -> nota2,
        'media' => $request -> media,
        ]);
        return ("<script>alert('Seu Cavalo foi cadastrado com sucesso, Parabens.')</script> <a href='loja-comprador'>Clique aqui para voltar a loja</a>");
    }
}
