@extends('layouts.loja-layout')

@section('titulo', 'Comprador')

@section('navcomp', 'active')

@section('subtitulo', 'Veja os Cavalos que estão a venda neste momento, e faça a sua escolha ')

@section('conteudo')

    <div class="col-md-3 text-center">
        <br>
        <a href="/loja-comprador/1"><img onmouseover="bigImg(this)" onmouseout="normalImg(this)" class="imgs"
                src="https://cptstatic.s3.amazonaws.com/imagens/enviadas/materias/materia16043/caracteristicas-cavalos-saudaveis-artigos-cursos-cpt.jpg"
                alt="" width="90%"></a>
                <p></p>
    </div>
    <div class="col-md-3 text-center">
        <br>
        <a href="/loja-comprador/2"><img onmouseover="bigImg(this)" onmouseout="normalImg(this)" class="imgs"
                src="http://blog.7mboots.com.br/wp-content/uploads/2020/06/the-black-horse-of-the-frisian-breed-walks-in-the-P77UURU_Easy-Resize.com_.jpg"
                alt="" width="90%"></a>
    </div>
    <div class="col-md-3 text-center">
        <br>
        <a href="/loja-comprador/3"><img onmouseover="bigImg(this)" onmouseout="normalImg(this)" class="imgs"
                src="data:image/jpeg;base64,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"
                alt="" width="90%"></a>
    </div>
    <div class="col-md-3 text-center">
        <br>
        <a href="/loja-comprador/4"><img onmouseover="bigImg(this)" onmouseout="normalImg(this)" class="imgs"
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS7jg9l16DQXhEoHi90GgoyN-Qrk6h7a0oMLA&usqp=CAU"
                alt="" width="90%"></a>
                <br><br><br><br><br><br>
    </div>
    <div class="col-md-3 text-center">
        <br>
        <a href="/loja-comprador/6"><img onmouseover="bigImg(this)" onmouseout="normalImg(this)" class="imgs"
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSTqTFQLsg1zWrERB3a94vbdwrQfYmwflhIqg&usqp=CAU"
                alt="" width="90%"></a>
    </div>
    <div class="col-md-3 text-center">
        <br>
        <a href="/loja-comprador/7"><img onmouseover="bigImg(this)" onmouseout="normalImg(this)" class="imgs"
                src="https://http2.mlstatic.com/D_NQ_NP_750707-MLB43565968846_092020-O.jpg" alt="" width="90%"></a>
    </div>
    <div class="col-md-3 text-center">
        <br>
        <a href="/loja-comprador/8"><img onmouseover="bigImg(this)" onmouseout="normalImg(this)" class="imgs"
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRFKcDNYO3TJauIKqrvj-O4T9iox586QFCKg&usqp=CAU"
                alt="" width="90%"></a>
    </div>
    <div class="col-md-3 text-center">
        <br>
        <a href="/loja-comprador/9"><img onmouseover="bigImg(this)" onmouseout="normalImg(this)" class="imgs"
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVwD02oqpIy38Q1yChqSD7r5XYyemPcdOjmw&usqp=CAU"
                alt="" width="90%"></a>
                <br><br><br><br><br><br>
    </div>
    <nav class="paginas" id="pages" >
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="">Anterior</a></li>
            <li class="page-item"><a class="page-link active" href="">1</a></li>
            <li class="page-item"><a class="page-link" href="/loja-comprador/ver/1">2</a></li>
            <li class="page-item"><a class="page-link" href="">3</a></li>
            <li class="page-item"><a class="page-link" href="">Proximo</a></li>
        </ul>
    </nav>

@endsection
