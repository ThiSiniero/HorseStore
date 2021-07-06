<!DOCTYPE html>
<html lang="pt-br">

<head>
    {{-- Meta tags --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Thiago Siniero" />
    <meta name="creator" content="Thiago Siniero" />
    <meta name="robots" content="nofollow">
    <meta property="og:site_name" content="HorseStore" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="pt_BR" />
    <meta property="og:url" content="https://www.HorseStore.com.br" />
    <meta property="og:title" content="HorseStore" />
    <meta property="og:description" content="Venha conhecer a nossa loja de venda de cavalos, nela você irá escolher o cavalo mais adequado para você." />
    <meta property="og:image" content="http://blog.7mboots.com.br/wp-content/uploads/2020/06/the-black-horse-of-the-frisian-breed-walks-in-the-P77UURU_Easy-Resize.com_.jpg" />
    <meta property="og:image:url" content="http://blog.7mboots.com.br/wp-content/uploads/2020/06/the-black-horse-of-the-frisian-breed-walks-in-the-P77UURU_Easy-Resize.com_.jpg" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:url" content="https://www.HorseStore.com.br" />
    <meta name="twitter:title" content="HorseStore" />
    <meta name="twitter:description" content="Venha conhecer a nossa loja de venda de cavalos, nela você irá escolher o cavalo mais adequado para você." />
    <meta itemprop="name" content="HorseStore" />
    <meta name="dcterms.title" content="HorseStore" />
    <meta name="dcterms.description" content="Venha conhecer a nossa loja de venda de cavalos, nela você irá escolher o cavalo mais adequado para você." />
    <meta name="dcterms.type" content="Text" />
    <meta name="dcterms.format" content="text/html" />
    <meta name="dcterms.identifier" content="https://www.HorseStore.com.br" />
    <meta name="description" content="Venha conhecer a nossa loja de venda de cavalos, nela você irá escolher o cavalo mais adequado para você." />
    <meta name="facebook-domain-verification" content="" />
    <meta http-equiv="content-language" content="pt-br" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="theme-color" content="#f4a460" />
    {{-- Links --}}
    <link rel="stylesheet" href="{{ URL::asset('css/loja.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- Titulo --}}
    <title>HorseStore - @yield('titulo')</title>
</head>
<body class="tudo">
    {{-- Navbar --}}
    <header>
        <nav class="cabeça navbar fixed-top justify-content-betwen">
            <div class="col-lg-4">
                <h1> HorseStore</h1> <img class="miniimg"
                    src="https://img.irroba.com.br/cavalari//catalog/logos/store_logo0c42782216.png" alt="" width="10%">
            </div>
            <ul class="nav nav-pills col-lg-3">
                <li class="nav-item">
                    <a class="nav-link @yield('navcomp')" href="/loja-comprador">Comprador </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('navvend')" href="/loja-vendedor">Vendedor</a>
                </li>
            </ul>
        </nav>
    </header><br>
    {{-- Subtitulo --}}
    <section class="text-center">
        <h3>@yield('subtitulo') </h3><br><br>
    </section>
    {{-- Conteudo da página --}}
    <main class="row align-items-start">
        @yield('conteudo')
    </main>
    {{-- Rodapé --}}
    <footer class="row">
        <div class="col-md-4">
            <p>Aqui estão nossas redes sociais :</p>
            <a href="" class="fa fa-facebook fa-lg face"> Facebook</a> <br>
            <a href="" class="fa fa-instagram fa-lg insta"> Instagram</a> <br>
            <a href="" class="fa fa-telegram fa-lg tele"> Telegram</a>
        </div>
        <div class="col-md-4">
            <br>
            <h4>Feito por ThiagoSiniero</h4><br>
            <p>Copyright © 2021 - Skill Lab</p>
        </div>
        <div class="col-md-4 text-center tel">
            <p>Para mais informaçoes ou duvidas sobre o site <br> entre em contato conosco :</p>
            <p>(+55) 12 3833-7840</p>
            <p>(+55) 12 93675-4702</p>
        </div>
    </footer>
    {{-- Scripts --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="{{ URL::asset('js/loja.js') }}"></script>
</body>

</html>
