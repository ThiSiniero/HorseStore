@extends('layouts.loja-layout')

@section('titulo', 'Comprador')

@section('navcomp', 'active')

@section('subtitulo', 'Veja os Cavalos que estão a venda neste momento, e faça a sua escolha')

@section('conteudo')

    @forelse ($cavalo as $cavalo)
        <div class="col-md-3 text-center">
            <br>
            <img onmouseover="bigImg(this)" onmouseout="normalImg(this)" class="imgs"
            src="https://cptstatic.s3.amazonaws.com/imagens/enviadas/materias/materia16043/caracteristicas-cavalos-saudaveis-artigos-cursos-cpt.jpg"
            alt="" width="90%">
            <h5>{{$cavalo->nome_animal}}</h5>
            <p>Este cavalo é da raça {{$cavalo->raca_animal}} com uma pelagem {{$cavalo->cor_animal}} e com uma idade de {{$cavalo->idade_animal}} anos, sendo do sexo {{$cavalo->sexo_animal}}.</p>
            <a href="/HorseStore-comprador/show/{{$cavalo->id}}" class="vejamais">Veja Mais</a><br><br><br>
        </div>
    @empty
        <div class="text-center"> 
            <h5>Sem cavalos cadastrados</h5>
            <p>Caso queira cadastrar o seu animal clique neste link:</p>
            <a href="/HorseStore-vendedor"><button type="submit" for='forms' class="btn btn-outline-warning">Clique aqui para cadastrar seu cavalo</button></a>
            <br><br><br>
        </div>
    @endforelse
        <nav class="paginas" id="pages" >
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="">Anterior</a></li>
                <li class="page-item"><a class="page-link active" href="">1</a></li>
                <li class="page-item"><a class="page-link" href="">2</a></li>
                <li class="page-item"><a class="page-link" href="">3</a></li>
                <li class="page-item"><a class="page-link" href="">Proximo</a></li>
            </ul>
        </nav>
@endsection 
