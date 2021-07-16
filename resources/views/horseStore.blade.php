@extends('layouts.loja-layout')

@section('titulo', 'Home')

@section('homecomp', 'active')

@section('subtitulo', 'Bem Vindo a HorseStore, aqui você poderá vender ou comprar o cavalo que desejar ! ')

@section('conteudo')        

<div class="row">
   <table class="col-4 comp">
        <tr>
            <th><h3>Comprador</h3></th>        
        </tr>
        <tr>
            <td><hr></td>
        </tr>
        <tr>
            <td>Para os compradores, temos muitas informações de cada animal, onde você poderá vê-las e escolher aquele animal que mais o agrada. </td>
        </tr>
        <tr>
            <td><hr></td>
        </tr>
        <tr>
            <td>Depois de escolher aquele animal que mais o agradou, você poderá ver as informações do vendedor, discutindo com ele o valor mais adequado.</td>
        </tr>
        <tr>
            <td><hr></td>
        </tr>
        <tr>
            <td><a href="HorseStore-comprador" class="hlink">Clique aqui para ver os cavalos a venda</a><br><br></td>
        </tr>
   </table>
   <table class="col-4 comp">
    <tr>
        <th><h3>Vendedor</h3></th> 
        
    </tr>
    <tr>
        <td><hr></td>
    </tr>
    <tr>
        <td>Para os vendedores, aqui vocês terão total liberdade para anunciar os seu animais, bastando apenas adicionar as suas informações pessoas e as do animal que será vendido.</td>
    </tr>
    <tr>
        <td><hr></td>
    </tr>
    <tr>
        <td>Caso hajá algum interesse no seu animal a venda, enviaremos um e-mail para informa-lo e passaremos seu nome e numero para o interessado, fazendo com que ele entre em contato e discuta sobre valores bons para ambos. </td>
    </tr>
    <tr>
        <td><hr></td>
    </tr>
    <tr>
        <td><a href="HorseStore-vendedor" class="hlink ">Clique aqui para vender o seu cavalo</a><br><br></td>
    </tr>
</table>
<div class="col-4 text-end miniimg"> <img
    src="https://i.pinimg.com/474x/93/a6/6d/93a66d4af145569b51c8223c82a7f207.jpg" alt="" width="15%"> </div>
<div class="col-4"></div>
<div class="col-4 miniimg"> <img src="https://gartic.com.br/imgs/mural/he/hellensamara_13/cavalo-2.png" alt=""
    width="15%"><br><br><br> </div>
</div>
@endsection
