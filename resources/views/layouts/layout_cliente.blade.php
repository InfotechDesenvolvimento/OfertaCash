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
        <!-- FONT AWESOME -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
        <!-- FAVICON -->
        <link rel="shortcut icon" href="" />
        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('resources/css/cliente/layout.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    </head>
    <body id="body-pd">

        <header class="header" id="header">
            <div class="header_toggle">
                <i class='bx bx-menu' id="header-toggle"></i> 
            </div>
            <div class="btn-group">
                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-user-circle fa-2x"></i>
                </button>
                <!-- <ul class="dropdown-menu dropdown-menu-end">
                    <li><button class="dropdown-item" type="button">Logout</button></li>
                </ul> -->
            </div>
        </header>

        <div class="l-navbar mb-5" id="nav-bar">
            <nav class="nav">
                <div>
                    <a href="#" class="nav_logo">
                        <span class="nav_logo-name" id="logo-name" style="display: none">OfertaCash</span>
                    </a>
                    <div class="nav_list">
                        <a href="{{ route('cliente.home') }}" class="nav_link" id="inicio_cliente">
                            <i class="fas fa-home"></i>
                            <span class="nav_name">
                                Início
                            </span>
                        </a>
                        <a href="{{ route('cliente.credenciadas') }}" class="nav_link" id="credenciadas_cliente">
                            <i class="fas fa-project-diagram"></i>
                            <span class="nav_name">
                                Redes Credenciadas
                            </span>
                        </a>
                        <a href="{{ route('cliente.pagamentos_pendentes') }}" class="nav_link" id="pagamentos_clientes">
                            <i class="fas fa-coins"></i>
                            <span class="nav_name">
                                Pagamentos Pendentes
                            </span>
                        </a>
                        <a href="{{ route('cliente.extratos') }}" class="nav_link" id="extratos_cliente">
                            <i class="fas fa-receipt"></i>
                            <span class="nav_name">
                                Extratos
                            </span>
                        </a>
                        <!-- <a href="#disputas" class="nav_link">
                            <i class="fas fa-compress-alt"></i>
                            <span class="nav_name">
                                Disputas
                            </span>
                        </a>
                        <a href="#disputas" class="nav_link">
                            <i class="fas fa-file-invoice-dollar"></i>
                            <span class="nav_name">
                                Faturas
                            </span>
                        </a>
                        <a href="#disputas" class="nav_link">
                            <i class="fas fa-star"></i>
                            <span class="nav_name">
                                Satisfação do Cliente
                            </span>
                        </a>
                        <a href="#disputas" class="nav_link">
                            <i class="fas fa-comments-dollar"></i>
                            <span class="nav_name">
                                Transferências
                            </span>
                        </a> -->
                    </div>
                </div>
                <a href="{{ route('logout') }}" class="nav_link">
                    <i class="fas fa-sign-out-alt"></i>
                    <span class="nav_name">
                        Sair
                    </span>
                </a>
            </nav>
        </div>
        @yield('content')
    </body>
    <script  href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{ asset('resources/js/cliente/layout.js') }}"></script>
    <script type="text/javascript">
        document.getElementById('logo-name').style.display = "none";

        document.getElementById('header-toggle').onclick = function() {
            nome = document.getElementById('logo-name');
            if(nome.style.display === "none") {
                nome.style.display = "block";
            } else {
                nome.style.display = "none";
            }
        }
    </script>
</html>