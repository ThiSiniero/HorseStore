@extends('layouts.loja-layout')

@section('titulo', 'Excluir')

@section('subtitulo', 'Você reamente deseja deletar este anuncio')

@section('conteudo')
    <div class="text-center">
        <img src="{{ $cavalo->img_cavalo }}" alt="cavalo" width="40%">
    </div>
    <table>
        <tr>
            <th class="tabela">Proprietario:</th>
            <th class="tabela">Idade:</th>
            <th class="tabela">Email:</th>
            <th class="tabela">Telefone:</th>
            <th class="tabela">CEP:</th>
        </tr>
        <tr>
            <td class="tabela">{{ $cavalo->nome }}</td>
            <td class="tabela">{{ $cavalo->idade }}</td>
            <td class="tabela">{{ $cavalo->email }}</td>
            <td class="tabela">{{ $cavalo->tel }}</td>
            <td class="tabela">{{ $cavalo->cep }}</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="tabela">Animal:</th>
            <th class="tabela">Raça:</th>
            <th class="tabela">Idade:</th>
            <th class="tabela">Cor:</th>
            <th class="tabela">Sexo:</th>
        </tr>
        <tr>
            <td class="tabela">{{ $cavalo->nome_animal }}</td>
            <td class="tabela">{{ $cavalo->raca_animal }}</td>
            <td class="tabela">{{ $cavalo->idade_animal }}</td>
            <td class="tabela">{{ $cavalo->cor_animal }}</td>
            <td class="tabela">{{ $cavalo->sexo_animal }}</td>
        </tr>
    </table>
    <form class="text-center" action="{{ route('excluir_cavalo', ['id' => $cavalo->id]) }}" method="POST">
        @csrf
        <br><br>
        <button type="submit" for='forms' class="btn btn btn-danger">Excluir</button>
        <br><br>
    </form>

@endsection
