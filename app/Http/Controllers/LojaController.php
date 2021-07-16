<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LojaModel;

class LojaController extends Controller {
    public function home() {
        return view ('horseStore');
    }
    public function comprador() {
        $cavalo = LojaModel::all();

        return view('horseStore-comprador', compact('cavalo'));
    }

    public function vendedor() {
        return view ('horseStore-vendedor');
    }

    // Adicionar
    public function store(Request $request) {
        LojaModel::create([ 
                'nome'=> $request -> nome,
                'idade'=> $request -> idade,
                'email'=> $request -> email,
                'tel'=> $request -> tel,
                'cep'=> $request -> cep,
                'nome_animal'=> $request -> nome_animal,
                'raca_animal'=> $request -> raca_animal,
                'idade_animal'=> $request -> idade_animal,
                'cor_animal'=> $request -> cor_animal,
                'sexo_animal'=> $request -> sexo_animal,
                'img_animal'=> $request -> img_animal,
                ]);
        return ("<script>alert('Seu Cavalo foi cadastrado com sucesso, Parabens.')</script> <a href='HorseStore-comprador'>Clique aqui para voltar a loja</a>");
        // dd($request-> all());
    }

    //Listar

    public function show($id) {
        $cavalo=LojaModel::findOrFail($id);

        return view('show', ['cavalo'=> $cavalo]);
    }
    
    //Editar
    public function edit($id) {
        $cavalo=LojaModel::findOrFail($id);
        return view('edit', ['cavalo'=> $cavalo]);
    }

    public function update(Request $request, $id) {

        $cavalo=LojaModel::findOrFail($id);
        $cavalo->update([ 
            'nome'=> $request -> nome,
            'idade'=> $request -> idade,
            'email'=> $request -> email,
            'tel'=> $request -> tel,
            'cep'=> $request -> cep,
            'nome_animal'=> $request -> nome_animal,
            'raca_animal'=> $request -> raca_animal,
            'idade_animal'=> $request -> idade_animal,
            'cor_animal'=> $request -> cor_animal,
            'sexo_animal'=> $request -> sexo_animal,
            'img_animal'=> $request -> img_animal,
        ]);
        return view("horseStore-comprador");
    }

    //Excluir
    public function delete($id) {
        $cavalo= LojaModel::findOrFail($id);
        return view('delete', ['cavalo'=> $cavalo]);
    }
    public function destroy($id) {
        $cavalo =  LojaModel::findOrFail($id);
        $cavalo->delete();
        return view ('horseStore-comprador');
    }
}