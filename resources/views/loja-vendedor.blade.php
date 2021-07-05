@extends('layouts.loja-layout')

@section('titulo', 'Vendedor')

@section('navvend', 'active')

@section('subtitulo', 'Anuncie aqui o seu Cavalo, preenchendo todos os campos do formulario ')

@section('conteudo')

    <form action="{{route('registrar_cavalo')}}" method="POST" class="row">
        @csrf
        <div class="col-md-3 col-sm-8 text-center forms">
            <legend>Informações do Cliente</legend><br><br>
            <label for="nome">Nome Completo:</label><br>
            <input type="text" name="nome">
            <br><br>
            <label for="idade">Idade:</label><br>
            <input type="number" pattern="[0-9]+$" name="idade">
            <br><br>
            <label for="email">E-Mail</label><br>
            <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" name="email">
            <br><br>
            <label for="tel">Telefone</label><br>
            <input type="text" name="tel">
            <br><br>
            <label for="cep">CEP</label><br>
            <input type="text" name="cep">
            <br><br>
        </div><br>
        <div class="col-md-3 col-sm-8 text-center forms">
            <legend>Informações do Cavalo</legend><br><br>
            <label for="nome_animal">Nome do Animal:</label><br>
            <input type="text" name="nome_animal">
            <br><br>
            <label for="raca_animal">Raça:</label><br>
            <input type="text" name="raca_animal">
            <br><br>
            <label for="idade_animal">Idade:</label><br>
            <input type="number" name="idade_animal">
            <br><br>
            <label for="cor_animal">Pelagem:</label><br>
            <input type="text" name="cor_animal">
            <br><br>
            <label for="sexo_animal">Sexo:</label><br>
            <input type="radio" name="sexo_animal" value="Masculino">
            <label for="sexo"> Maculino</label>
            <input type="radio" name="sexo_animal" value="Feminino">
            <label for="sexo"> Feminino</label>
            <br><br>
        </div>
        <div class="col-12 text-center">
            <button type="submit" for='forms' class="btn btn-outline-warning">Enviar</button>
            <br><br>
        </div>
    </form>

    <div class="col-4 text-end miniimg"> <img src="https://i.pinimg.com/474x/93/a6/6d/93a66d4af145569b51c8223c82a7f207.jpg" alt="" width="15%"> </div>
    <div class="text-center foto col-4">
        <label for="foto">Adicione uma foto do seu cavalo :</label><br><br>
        <div class="input-group">
            <input type="file" class="form-control" id="inputGroupFile02">
        </div>
        <br><br>
    </div>
    <div class="col-4 miniimg"> <img src="https://gartic.com.br/imgs/mural/he/hellensamara_13/cavalo-2.png" alt="" width="15%"> </div>

@endsection
