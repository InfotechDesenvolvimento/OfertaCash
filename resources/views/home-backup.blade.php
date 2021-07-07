<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OfertaCash - Soluções Financeiras</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/css/home.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('resources/css/home-backup.css') }}">
    <script src="{{ asset('resources/js/layout.js') }}"></script>
    <link rel="shortcut icon" href="" />
</head>
<body>
    <ul class="nav justify-content-center d-flex" id="nav_b">
        <li class="navbar-brand">
            <a class="nav-brand" href="{{ route('home') }}">
                <img id="logo_nav" src="{{ asset('resources/images/logo_ofertacash.png') }}">
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" 
                href="{{ route('home') }}" 
                style="font-weight: bolder; 
                border-bottom: 5px solid #1a29e2">
                Início
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('quem_somos') }}">Quem somos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('cash_carteira') }}">Cash Carteira</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('landing_seja_credenciado') }}">Lojista</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('credito') }}">Crédito</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('contato') }}">Contato</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">Login</a>
        </li>
        <span class="navbar-toggle nav-link" id="js-navbar-toggle">
            <i class="fas fa-bars"></i>
        </span>
    </ul>
    <div class="header">
        <ul class="cb-slideshow">
            <li>
                <span>Image 01</span>
            </li>
            <li>
                <span>Image 02</span>
            </li>
            <li>
                <span>Image 03</span>
            </li>
            <li>
                <span>Image 01</span>
            </li>
            <li>
                <span>Image 02</span>
            </li>
            <li>
                <span>Image 03</span>
            </li>
        </ul>
        <div id="title">
            <div id="sub_title">
                <img src="{{ asset('resources/images/oferta_cash.png') }}" id="logo_ofertacash" >
                <p>
                    Soluções financeiras e comerciais, 
                    antecipação de recebíveis, empréstimos, 
                    financiamentos e muito mais!
                </p>
            </div>
        </div>
    </div>
        <div id="cont_head">
            <div id="row_header" class="row">
                <div class="col-sm">
                    <br>
                    <i class="fas fa-wallet"></i>
                    <h3>Crie sua cash carteira</h3>
                    <p>Pessoa Física</p>
                </div>
                <div class="col-sm">
                    <br>
                    <i class="fas fa-briefcase"></i>
                    <h3>Seja Credenciado</h3>
                    <p>Pessoa Jurídica</p>
                </div>
                <div class="col-sm">
                    <br>
                    <i class="fas fa-handshake"></i>
                    <h3>Parcerias Comerciais</h3>
                    <p>Seja nosso parceiro</p>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br><br><br>
        <div class="container">
            <div class="row">
                <div id="about_us" class="col-sm">
                    <h2>Sobre nós</h2>
                    <p>Somos a primeira plataforma de cashback do país a integrar num só local: gestão de benefícios, gestão de recompensas próprias e de terceiros, banco digital, conta digital, soluções de crédito para empresas e seus clientes.</p>
                    <p>Aliamos a experIência em tecnologia com a vivência do mercado bancário, trazendo soluções completas para pequenas empresas.</p>
                    <i class="fas fa-check-circle"></i> <label>Plataforma de Cash Back</label>
                    <br><br>
                    <i class="fas fa-check-circle"></i> <label>Soluções Financeiras</label>
                    <br><br>
                    <i class="fas fa-check-circle"></i> <label>Condomínios</label>
                    <br><br>
                </div>
                <div class="col-sm" id="img_div">
                    <div id="play"><i class="fas fa-play"></i></div>
                    <img src="{{ asset('resources/images/img1.jpg') }}" id="img1">
                </div>
            </div>
            <br><br><br>
        </div>
        <div class="services">
            <br><br><br>
            <div class="container">
                <h2>Serviços</h2>
                <br>
                <div class="divider py-1 bg-dark" style="width: 40%; margin-left:30%"></div>
                <br><br><br><br>
                <div class="row">
                    <div class="col-sm caixa">
                        <div class="row">
                            <div class="col-4">
                                <div class="fundo_i"><i class="fas fa-chart-line"></i></div>
                            </div>
                            <div class="col-sm">
                                <h3>Plataforma de Cash Back</h3>
                            </div>
                        </div>
                        <br>
                        <p>Pessoa Física, Pessoa Jurídica.</p>
                        <br>
                        <a href="#">Ver mais</a>
                    </div>
                    <div class="col-sm caixa">
                        <div class="row">
                            <div class="col-4">
                                <div class="fundo_i"><i class="far fa-credit-card"></i></div>
                            </div>
                            <div class="col-sm">
                                <h3>Crédito</h3>
                            </div>
                        </div>
                        <br>
                        <p>Empréstimos PJ, Crédito Pessoal, Antecipação de Crédito, Recebíveis de Cartão, Crédito Consignado.</p> 
                        <br>
                        <a href="#">Ver mais</a>
                    </div>
                    <div class="col-sm caixa">
                        <div class="row">
                            <div class="col-4">
                                <div class="fundo_i"><i class="fas fa-wallet"></i></div>
                            </div>
                            <div class="col-sm">
                                <h3>Conta Digital</h3>
                            </div>
                        </div>
                        <br>
                        <p>Abra sua conta digital.</p>
                        <br>
                        <a href="#">Ver mais</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm caixa">
                        <div class="row">
                            <div class="col-4">
                                <div class="fundo_i"><i class="fas fa-handshake"></i></div>
                            </div>
                            <div class="col-sm">
                                <h3>Parcerias Comerciais</h3>
                            </div>
                        </div>
                        <br>
                        <p>Afiliados, licenciados e desenvolvedores.</p>
                        <br>
                        <a href="#">Ver mais</a>
                    </div>
                    <div class="col-sm caixa">
                        <div class="row">
                            <div class="col-4">
                                <div class="fundo_i"><i class="fas fa-chart-pie"></i></div>
                            </div>
                            <div class="col-sm">
                                <h3>APIs e Integrações</h3>
                            </div>
                        </div>
                        <br>
                        <p>Nossas APIs.</p>
                        <br>
                        <a href="#">Ver mais</a>
                    </div>
                    <div class="col-sm caixa">
                        <div class="row">
                            <div class="col-4">
                                <div class="fundo_i"><i class="fas fa-desktop"></i></div>
                            </div>
                            <div class="col-sm">
                                <h3>Marketplace</h3>
                            </div>
                        </div>
                        <br>
                        <p>Anuncie seus produtos e serviços em nosso marketplace (em breve).</p>
                        <br>
                        <a href="#">Ver mais</a>
                    </div>
                    <br><br><br><br>
                </div>
            </div>
        </div>
        <div class="power">
            <div class="fundo">
                <h2>The Power To Help You Succeed</h2>
                <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil illum qui dolorem eum fugiat quo voluptas nulla pariatur</p>
            </div>
        </div>
        <br><br><br>
        <div class="">
        </div>
    </body>
</html>