@extends('layouts.loja-layout')

@section('titulo', 'Comprador')

@section('navcomp', 'active')

@section('subtitulo', 'Veja este cavalo ')

@section('conteudo')
        <div class="col-5">
        <img id="imgver" src="https://cptstatic.s3.amazonaws.com/imagens/enviadas/materias/materia16043/caracteristicas-cavalos-saudaveis-artigos-cursos-cpt.jpg" alt="cavalo" width="100%">
        {{-- src="{{ $cavalo->img_animal }}" --}}
        <br><br> 
        </div>
        <div class="col-7">
        <h5>{{ $cavalo->nome_animal }}</h5>
        <p>Um Cavalo de raça {{ $cavalo->raca_animal }} com uma pelagem {{ $cavalo->cor_animal }} com uma idade <br> de {{ $cavalo->idade_animal }} anos, sendo do sexo {{ $cavalo->sexo_animal }}. <br>
            O Proprietario deste cavalo é o {{ $cavalo->nome }}, entre em contato com o este <br> pelo numero: {{ $cavalo->tel }} </p>
        <table>
            <tr>
                <th class="tabela">Proprietario:</th>
                <th class="tabela">Telefone:</th>
                <th class="tabela">Animal:</th>
                <th class="tabela">Raça</th>
                <th class="tabela">Idade</th>
            </tr>
            <tr>
                <td class="tabela">{{ $cavalo->nome }}</td>
                <td class="tabela">{{ $cavalo->tel }}</td>
                <td class="tabela">{{ $cavalo->nome_animal }}</td>
                <td class="tabela">{{ $cavalo->raca_animal }}</td>
                <td class="tabela">{{ $cavalo->idade_animal }}</td>
            </tr>
        </table>
        <br>
        </div> 
        <div class="col-4 text-end miniimg"> <img
            src="https://i.pinimg.com/474x/93/a6/6d/93a66d4af145569b51c8223c82a7f207.jpg" alt="" width="15%"> 
        </div>
        <div class="col-4 text-center"><br>
            <a href="/loja-comprador/editar/{{ $cavalo->id }}"><button type="submit" for='forms' class="btn btn btn-success">Editar</button></a>
            <a href="/loja-comprador/excluir/{{ $cavalo->id }}"><button type="submit" for='forms' class="btn btn btn-danger">Excluir</button></a>
        </div>     
        <div class="col-4 miniimg"> <img src="https://gartic.com.br/imgs/mural/he/hellensamara_13/cavalo-2.png" alt=""
            width="15%"><br><br><br> 
        </div>
@endsection
