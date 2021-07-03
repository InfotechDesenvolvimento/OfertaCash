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
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js" integrity="sha512-Rdk63VC+1UYzGSgd3u2iadi0joUrcwX0IWp2rTh6KXFoAmgOjRS99Vynz1lJPT8dLjvo6JZOqpAHJyfCEZ5KoA==" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
        <script type='text/javascript' src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('resources/css/layout_lojista.css') }}">
        <script src="{{ asset('resources/js/layout_lojista.js') }}" ></script>
        <script src="https://kit.fontawesome.com/0ad191b5ad.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />
        <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
    </head>
    <body class="antialiased">
        <div class="sidenav">
          <label nohref class="usr">Logado como lojista</label>
          <label id="usuario_nome">{{ Auth::user()->nome }}</label>
          <label>ID: {{ Auth::user()->codigo }}</label>
          @if($pagina == 'home')
            <a href="{{ route('lojista.home') }}" class="selecionado" > <i class="fas fa-home"></i> Início</a>
          @else
            <a href="{{ route('lojista.home') }}"> <i class="fas fa-home"></i> Início</a>
          @endif
          @if($pagina == 'credenciadas')
            <a href="{{ route('lojista.credenciadas') }}" class="selecionado"> <i class="fas fa-project-diagram"></i> Redes Credenciadas</a>
          @else
            <a href="{{ route('lojista.credenciadas') }}"> <i class="fas fa-project-diagram"></i> Redes Credenciadas</a>
          @endif
          @if($pagina == 'disputas')
            <a href="{{ route('lojista.disputas') }}" class="selecionado" > <i class="fas fa-compress-alt"></i> Disputas</a>
          @else
            <a href="{{ route('lojista.disputas') }}"> <i class="fas fa-compress-alt"></i> Disputas</a>
          @endif
          @if($pagina == 'vendas_pendentes' || $pagina == 'vendas_recebidas' || $pagina == 'vendas_finalizadas' || $pagina == 'vendas_canceladas')
            <button class="dropdown-btn selecionado"> <i class="fas fa-tags"></i> Vendas
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
              @if($pagina == 'vendas_pendentes')
                <a href="{{ route('lojista.vendas_pendentes') }}" class="selecionado"> <i class="fas fa-hourglass-start"></i> Pendentes</a>
              @else
                <a href="{{ route('lojista.vendas_pendentes') }}"> <i class="fas fa-hourglass-start"></i> Pendentes</a>
              @endif
              @if($pagina == 'vendas_finalizadas')
                <a href="{{ route('lojista.vendas_finalizadas') }}" class="selecionado"> <i class="fas fa-file-invoice-dollar"></i> Finalizadas</a>
              @else
                <a href="{{ route('lojista.vendas_finalizadas') }}"> <i class="fas fa-file-invoice-dollar"></i> Finalizadas</a>
              @endif
              @if($pagina == 'vendas_canceladas')
                <a href="{{ route('lojista.vendas_canceladas') }}" class="selecionado"> <i class="fas fa-ban"></i> Canceladas</a>
              @else
                <a href="{{ route('lojista.vendas_canceladas') }}"> <i class="fas fa-ban"></i> Canceladas</a>
              @endif
              @if($pagina == 'vendas_recebidas')
                <a href="{{ route('lojista.vendas_recebidas') }}" class="selecionado"> <i class="fas fa-reply"></i> Recebidas</a>
              @else
                <a href="{{ route('lojista.vendas_recebidas') }}"> <i class="fas fa-reply"></i> Recebidas</a>
              @endif
            </div>
          @else
            <button class="dropdown-btn"> <i class="fas fa-tags"></i> Vendas
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
              <a href="{{ route('lojista.vendas_pendentes') }}"> <i class="fas fa-hourglass-start"></i> Pendentes</a>
              <a href="{{ route('lojista.vendas_finalizadas') }}"> <i class="fas fa-file-invoice-dollar"></i> Finalizadas</a>
              <a href="{{ route('lojista.vendas_canceladas') }}"> <i class="fas fa-ban"></i> Canceladas</a>
              <a href="{{ route('lojista.vendas_recebidas') }}"> <i class="fas fa-reply"></i> Recebidas</a>
            </div>
          @endif
          @if($pagina == 'estornos_aprovados' || $pagina == 'estornos_recusados')
            <button class="dropdown-btn selecionado"> <i class="fas fa-undo"></i> Estorno
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
              @if($pagina == 'estornos_aprovados')
                <a href="{{ route('lojista.estornos_aprovados') }}" class="selecionado"> <i class="fas fa-check-circle"></i> Aprovados</a>
              @else
                <a href="{{ route('lojista.estornos_aprovados') }}"> <i class="fas fa-check-circle"></i> Aprovados</a>
              @endif
              @if($pagina == 'estornos_recusados')
                <a href="{{ route('lojista.estornos_recusados') }}" class="selecionado" > <i class="fas fa-times-circle"></i> Recusados</a>
              @else
                <a href="{{ route('lojista.estornos_recusados') }}"> <i class="fas fa-times-circle"></i> Recusados</a>
              @endif
            </div>
          @else
            <button class="dropdown-btn"> <i class="fas fa-undo"></i> Estorno
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
              <a href="{{ route('lojista.estornos_aprovados') }}"> <i class="fas fa-check-circle"></i> Aprovados</a>
              <a href="{{ route('lojista.estornos_recusados') }}"> <i class="fas fa-times-circle"></i> Recusados</a>
            </div>
          @endif
          <a href="#site"> <i class="fas fa-globe"></i> Site</a>
          <a href="{{ route('logout') }}"> <i class="fas fa-sign-out-alt"></i> Sair</a>
        </div>
        <div class="conteudo">
          <div class="fundo">
            @yield('conteudo')
          </div>
        </div>
    </body>
</html>
