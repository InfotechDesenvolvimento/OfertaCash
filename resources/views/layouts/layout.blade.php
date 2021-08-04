<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OfertaCash - Soluções Financeiras</title>
    <!-- FONTE GOOGLE -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <!-- LAYOUT CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/css/home.css') }}">
    <!-- BOOTSTRAP 5.0.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="navbar" style="background-color: white">
        <div class="container">
            <!-- <div id="logoMaiorDiv">
                <img src="{{ asset('resources/images/logo_ofertacash2.png') }}" class="d-inline-block" id="logoMaior">
            </div> -->
            <div id="div01">
                <img src="{{ asset('resources/images/logo_ofertacash2.png') }}" class="d-inline-block" id="logoMaior">
            </div>
            <div id="div02">
                <img src="{{ asset('resources/images/logo_ofertacash.png') }}" class="d-inline-block" id="logoMenor">
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav justify-content-center mx-auto">
                    <li class="nav-item text-center px-2">
                        <a class="nav-link" aria-current="page" href="{{ route('home') }}" id="inicio">Início</a>
                    </li>
                    <li class="nav-item text-center px-2 sub-item">
                        <a class="nav-link" href="{{ route('quem_somos') }}" id="sobre">Quem somos</a>
                    </li>
                    <li class="nav-item text-center px-2 sub-item">
                        <a class="nav-link" href="{{ route('cash-carteira') }}" id="cash">Cash Carteira</a>
                    </li>
                    <li class="nav-item text-center px-2 sub-item">
                        <a class="nav-link" href="{{ route('credenciamento') }}" id="lojista">Lojista</a>
                    </li>
                    <li class="nav-item text-center px-2 sub-item">
                        <a class="nav-link" href="{{ route('credito') }}" id="credito">Crédito</a>
                    </li>
                    <li class="nav-item text-center px-2 sub-item">
                        <a class="nav-link" href="{{ route('contato') }}" id="contato">Contato</a>
                    </li>
                    <li class="nav-item text-center px-2 sub-item">
                        <a class="nav-link" href="{{ route('login') }}" id="login">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="{{ URL::asset('resources/js/jquery.mask.js')}}"></script>

<script type="text/javascript">
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("div01").style.display = "none";
            document.getElementById("div02").style.display = "block";
            document.getElementById("navbar").style.minHeight = "80px";
            document.getElementById("navbar").style.backgroundColor = "#edf1f7";
        } else {
            document.getElementById("div01").style.display = "block";
            document.getElementById("div02").style.display = "none";
            document.getElementById("navbar").style.minHeight = "150px";
            document.getElementById("navbar").style.backgroundColor = "white";
        }
    }
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</html>