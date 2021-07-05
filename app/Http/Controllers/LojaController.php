<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LojaModel;

class LojaController extends Controller
{
    public function comprador() {  
        return view ('loja-comprador');
    }
    public function vendedor() {  
        return view ('loja-vendedor');
    }
    public function store(Request $request) {  
    // Aqui estão sendo anexadas as informações do formulario,  
        LojaModel::create([
            'nome' =>  $request -> nome,
            'idade' => $request -> idade,
            'email' => $request -> email,
            'tel' => $request -> tel,
            'cep' =>  $request -> cep,
            'nome_animal' => $request -> nome_animal,
            'raca_animal' => $request -> raca_animal,
            'idade_animal' => $request -> idade_animal,
            'cor_animal' =>  $request -> cor_animal,
            'sexo_animal' => $request -> sexo_animal,
            ]);
            return ("<script>alert('Seu Cavalo foi cadastrado com sucesso, Parabens.')</script> <a href='loja-comprador'>Clique aqui para voltar a loja</a>");
    }
}