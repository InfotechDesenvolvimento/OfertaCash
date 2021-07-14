@extends('layouts.layout')

@section('title', 'Page Title')

<link rel="stylesheet" type="text/css" href="{{ asset('resources/css/quem-somos.css') }}">

@section('content')
    <div class="container sobre" data-aos="fade-up-right">
        <div class="row">
            <div class="col-sm-12">
                <h1 id="quem-somos-titulo">Quem Somos</h1>
            </div>
            <div class="col-sm-12">
                <p id="info-sobre">
                    Officia dolor ex labore mollit in consectetur in adipisicing occaecat tempor commodo est in esse in ad sint veniam non ad magna commodo dolor ullamco cupidatat dolore cupidatat in id sit excepteur aliquip eiusmod do qui qui culpa sit id cupidatat cupidatat nisi mollit sunt ut veniam commodo quis ut est anim excepteur amet nostrud deserunt pariatur duis sint magna duis dolor in nulla veniam sed veniam eu dolore sint tempor in esse voluptate voluptate in mollit velit in occaecat mollit in adipisicing nulla aliqua ut cillum ullamco aliqua irure nulla occaecat sit irure irure aliquip do et esse pariatur tempor ad sit laborum quis tempor in elit ut veniam sit aliquip amet magna eiusmod excepteur dolore et reprehenderit sed exercitation ut cillum do tempor culpa minim cillum do elit quis dolor culpa amet nisi ut magna dolor esse sit non labore consectetur dolore labore sit pariatur ut laboris non ut deserunt nostrud anim culpa in culpa pariatur aute id exercitation velit nisi velit ad ut consectetur commodo proident laborum veniam adipisicing commodo nisi dolor sit do ad laboris sed ullamco in occaecat ad qui consequat qui enim commodo aute nulla veniam laboris sit cupidatat esse dolore ea veniam dolor ullamco velit ex laboris aliquip officia adipisicing ut sed est qui amet sit eu nisi proident consectetur pariatur aliquip ut.
                </p>
            </div>
        </div>
    </div>

    <footer>
        <div class="fundo">
            <h2 data-aos="fade-down">The Power To Help You Succeed</h2>
            <p id="information" data-aos="fade-up">Velit laborum incididunt voluptate ea incididunt quis sed sit esse in dolor et sint esse cupidatat ex dolore ut enim do dolore consectetur in quis amet dolor sint sed nulla sit et nulla esse ad id voluptate pariatur reprehenderit dolore aliquip ut ut exercitation proident cupidatat culpa sint cupidatat velit elit commodo dolor qui irure eiusmod occaecat ad excepteur ad aliqua et duis aute in dolor enim cillum nulla id proident in irure pariatur fugiat ad eu dolor ad consequat sed incididunt adipisicing reprehenderit cupidatat sunt tempor ut mollit anim consequat magna cupidatat dolore ad sed laborum in occaecat commodo irure nulla consectetur exercitation mollit aliqua tempor ad proident laboris laborum fugiat qui voluptate dolor reprehenderit mollit excepteur et sed non labore ut aliquip ut ex id aliquip sint enim cillum nisi.</p>
        </div>
    </footer>

    <div class="credits">
        <p class="text-center">OfertaCash 2021</p>
    </div>

    <script>
        var sobre = document.getElementById("sobre");
        sobre.classList.add("active");
    </script>
@stop