<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>OfertaCash - Soluções Financeiras</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('resources/css/home.css') }}">
        <script src="{{ asset('resources/js/layout.js') }}"></script>
    </head>
    <body class="antialiased">
        <ul class="nav justify-content-center d-flex" id="nav_b">
            <li class="navbar-brand">
                <a class="nav-brand" href="{{ route('home') }}"><img id="logo_nav" src="{{ asset('resources/images/logo_ofertacash2.png') }}"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}" style="font-weight: bolder; border-bottom: 5px solid #fff;">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('quem_somos') }}">QUEM SOMOS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('cash_carteira') }}">CASH CARTEIRA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('landing_seja_credenciado') }}">LOJISTA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('credito') }}">CRÉDITO</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('contato') }}">CONTATO</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">LOGIN</a>
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
                    <p>Soluções financeiras e comerciais, antecipação de recebíveis, empréstimos, financiamentos e muito mais!</p>
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
