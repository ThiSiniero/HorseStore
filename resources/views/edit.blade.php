@extends('layouts.loja-layout')

@section('titulo', 'Vendedor')

@section('navvend', 'active')

@section('subtitulo', 'Edite as informações do seu envio ')

@section('conteudo')

    <form action="{{ route('alterar_cavalo', ['id' => $cavalo->id]) }}" method="POST">
        @csrf
        <table>
            <tr>
                <th class="tabela">Proprietario:</th>
                <th class="tabela">Idade:</th>
                <th class="tabela">Email:</th>
                <th class="tabela">Telefone:</th>
                <th class="tabela">CEP:</th>
            </tr>
            <tr>
                <td class="tabela"><input type="text" name=nome value="{{ $cavalo->nome }}"></td>
                <td class="tabela"><input type="text" name=idade value="{{ $cavalo->idade }}"></td>
                <td class="tabela"><input type="text" name=email value="{{ $cavalo->email }}"></td>
                <td class="tabela"><input type="text" name=tel value="{{ $cavalo->tel }}"></td>
                <td class="tabela"><input type="text" name=cep value="{{ $cavalo->cep }}"></td>
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
                <td class="tabela"><input type="text" name=nome_animal value="{{ $cavalo->nome_animal }}"></td>
                <td class="tabela"><input type="text" name=raca_animal value="{{ $cavalo->raca_animal }}"></td>
                <td class="tabela"><input type="text" name=idade_animal value="{{ $cavalo->idade_animal }}"></td>
                <td class="tabela"><input type="text" name=cor_animal value="{{ $cavalo->cor_animal }}"></td>
                <td class="tabela"><input type="text" name=sexo_animal value="{{ $cavalo->sexo_animal }}"></td>
            </tr>
        </table>
        <table>
            <tr>
                <th class="tabela">Imagem do cavalo:</th>
            </tr>
            <tr>
                <td class="tabela"><input type="text" name=img_animal value="{{ $cavalo->img_animal }}"></td>
            </tr>
        </table>
        <br>
        <div class="text-center">
            <button type="submit" for='forms' class="btn btn btn-warning">Atualizar</button>
        </div>
    </form>

@endsection
