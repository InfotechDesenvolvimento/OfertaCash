@extends('layouts.layout')

@section('title', 'Page Title')

<link rel="stylesheet" type="text/css" href="{{ asset('resources/css/home.css') }}">

@section('content')

    <div id="caroulsel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class=carousel-caption>
            image and logo here
            </div>
            <div class="carousel-item active">
                <img src="{{ asset('resources/images/background1.jpg') }}" class="d-block w-100" alt="..." id="image01">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('resources/images/background2.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('resources/images/background3.jpg') }}" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row" id="cards">
            <div class="col d-flex justify-content-center" data-aos="zoom-out-right">
                <div class="card" style="width: 18rem; background-color: white; border: none">
                    <div class="card-body">
                        <p class="text-center"><i class="fas fa-wallet fa-3x faa-float animated"></i></p>
                        <h5 class="card-title text-center">Crie sua cash carteira</h5>
                        <p class="card-text text-center">Pessoa física</p>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center" data-aos="zoom-out-up">
                <div class="card" style="width: 18rem; background-color: white; border: none">
                    <div class="card-body">
                        <p class="text-center"><i class="fas fa-briefcase fa-3x faa-float animated"></i></p>
                        <h5 class="card-title text-center">Seja credenciado</h5>
                        <p class="card-text text-center">Pessoa jurídica</p>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center" data-aos="zoom-out-left">
                <div class="card" style="width: 18rem; background-color: white; border: none">
                    <div class="card-body">
                        <p class="text-center"><i class="fas fa-handshake fa-3x faa-float animated"></i></p>
                        <h5 class="card-title text-center">Parcerias comerciais</h5>
                        <p class="card-text text-center">Seja nosso parceiro</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5 sobre border rounded" style="width: 78%; background-color: #ececec" data-aos="zoom-in">
        <div class="row">
            <div class="col d-flex justify-content-center" data-aos="fade-right">
                <div class="card" style="width: 100%; background-color: transparent;" id="card-sobre">
                    <div class="card-body">
                        <h5 class="card-title" id="titulo-sobre">Sobre nós</h5>
                        <br>
                        <p class="card-text" id="texto-sobre">Somos a primeira plataforma de cashback do país a integrar numa só ferramenta: gestão de de recompensas próprias e de parceiros, soluções de crédito para empresas e seus clientes, além de conta digital.</p>
                        <br>
                        <h6 class="card-subtitle mb-2 text-muted">
                            <i class="fas fa-check-circle"></i>
                            Plataforma de Cashback
                        </h6>
                        <br>
                        <h6 class="card-subtitle mb-2 text-muted">
                            <i class="fas fa-check-circle"></i>
                            Loja de Crédito
                        </h6>
                        <br>
                        <h6 class="card-subtitle mb-2 text-muted d-none">
                            <i class="fas fa-check-circle"></i>
                            Condomínios
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center" data-aos="fade-left" id="imagem01">
                <div class="card" id="card-image" style="margin-right: 20px; background-color: transparent;">
                    <img src="{{ asset('resources/images/img1.jpg') }}" class="card-img-top rounded">
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center mt-5 container" style="width: 80%;">
        <div class="container" data-aos="fade-up">
            <h2 class="servicos">Serviços</h2>
            <center><hr class="mt-5"></center>
            <div class="row row-cols-1 row-cols-md-3 g-4 mt-5">
                <div class="col">
                    <div class="card h-100" style="border: none">
                        <center>
                            <div class="fundo_i"><i class="fas fa-chart-line"></i></div>
                        </center>
                        <div class="card-body" style="border: none">
                            <h5 class="card-title text-center mt-2">Plataforma de Cashback</h5>
                            <p class="card-text text-center">Pessoa Física, Pessoa Jurídica.</p>
                        </div>
                        <div class="card-footer" style="border: none; background-color: transparent;">
                            <small class="text-muted">
                                <a href="#" class="btn-grad">Ver mais <i class="bi bi-arrow-right"></i></a>
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100" style="border: none">
                        <center>
                            <div class="fundo_i"><i class="fas far fa-credit-card"></i></div>
                        </center>
                        <div class="card-body" style="border: none">
                            <h5 class="card-title text-center mt-2">Loja de Crédito</h5>
                            <p class="card-text text-center">Empréstimos PJ, Crédito Pessoal, Antecipação de Crédito, Recebíveis de Cartão, Crédito Consignado.</p>
                        </div>
                        <div class="card-footer" style="border: none; background-color: transparent;">
                            <small class="text-muted">
                                <a href="#" class="btn-grad">Ver mais <i class="bi bi-arrow-right"></i></a>
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100" style="border: none">
                        <center>
                            <div class="fundo_i"><i class="fas fa-handshake"></i></div>
                        </center>
                        <div class="card-body" style="border: none">
                            <h5 class="card-title text-center mt-2">Parcerias Comerciais</h5>
                            <p class="card-text text-center">Afiliados, licenciados e desenvolvedores.</p>
                        </div>
                        <div class="card-footer" style="border: none; background-color: transparent;">
                            <small class="text-muted">
                                <a href="#" class="btn-grad">Ver mais <i class="bi bi-arrow-right"></i></a>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4 mt-5">
                <div class="col">
                    <div class="card h-100" style="border: none">
                        <center>
                            <div class="fundo_i"><i class="fas fa-wallet"></i></div>
                        </center>
                        <div class="card-body" style="border: none">
                            <h5 class="card-title text-center mt-2">Conta Digital</h5>
                            <p class="card-text text-center">Abra sua conta digital (em breve).</p>
                        </div>
                        <div class="card-footer" style="border: none; background-color: transparent;">
                            <small class="text-muted">
                                <a href="#" class="btn-grad">Ver mais <i class="bi bi-arrow-right"></i></a>
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100" style="border: none">
                        <center>
                            <div class="fundo_i"><i class="fas fa-chart-pie"></i></div>
                        </center>
                        <div class="card-body" style="border: none">
                            <h5 class="card-title text-center mt-2">APIs e Integrações</h5>
                            <p class="card-text text-center">Nossas APIs.</p>
                        </div>
                        <div class="card-footer" style="border: none; background-color: transparent;">
                            <small class="text-muted">
                                <a href="#" class="btn-grad">Ver mais <i class="bi bi-arrow-right"></i></a>
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100" style="border: none">
                        <center>
                            <div class="fundo_i"><i class="fas fa-desktop"></i></div>
                        </center>
                        <div class="card-body" style="border: none">
                            <h5 class="card-title text-center mt-2">Marketplace</h5>
                            <p class="card-text text-center">Anuncie seus produtos e serviços em nosso marketplace (em breve).</p>
                        </div>
                        <div class="card-footer" style="border: none; background-color: transparent;">
                            <small class="text-muted">
                                <a href="#" class="btn-grad">Ver mais <i class="bi bi-arrow-right"></i></a>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
    <script>
        var pagina = document.getElementById("inicio");
        pagina.classList.add("active");
    </script>
@stop