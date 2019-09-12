<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ARS-test') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- jQuery -->
    <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.css') }}" rel="stylesheet">
</head>
<body style="background2:white" >
<style>
    body{
        font-family: "avenir next";
    }
</style>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel pd-0">
        <div class="container max-wdth-init">
            <a class="navbar-brand pd-0" href="{{ url('/') }}">
                <img src="{{ asset('images/skin11r.png') }}" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Connexion</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Inscription</a>
                        </li>
                    @endif
                    @else
                        <li class="nav-item dropdown">
                            <a href="{!! route('home') !!}" id="" class="nav-link" href="#" role="button"
                               aria-haspopup="true" aria-expanded="false" v-pre>
                                Accueil <span class="caret"></span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="" class="nav-link" href="#" role="button"
                               aria-haspopup="true" aria-expanded="false" v-pre>
                                Mes projets <span class="caret"></span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="{!! route('devis') !!}" id="" class="nav-link" href="#" role="button"
                               aria-haspopup="true" aria-expanded="false" v-pre>
                                Mes devis <span class="caret"></span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="{!! route('realisations') !!}" id="" class="nav-link" href="#" role="button"
                               aria-haspopup="true" aria-expanded="false" v-pre>
                                Nos réalisations <span class="caret"></span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ ucfirst(Auth::user()->name) }} <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                     Déconnexion
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="">
        @yield('content')
    </main>

    <footer class="height-600" style="background-image: url({{asset('images/bg-contact-1024x463.png')}});background-repeat: no-repeat;background-size: 100% 100%;">
        <div class="row text-white mg-b-100" style="padding-top: 294px; padding-left: 142px;">
            <div class="col-md-offset-1 col-md-4">
                <h2>Nous contacter</h2>
                <div>
                    <p>Telephone: 877 834 232</p>
                    <p>Email: test@arsgroup.    cm</p>
                    <p>Adresse: Rue canard</p>
                </div>
            </div>
            <div class="offset-2 col-md-5">
                <form action="" method="post">
                    <div class="row">
                        <div class="form-group col-md-5">
                            <input class="form-control" type="text" name="prenom" id="prenom" placeholder="Prenom">
                        </div>
                        <div class="form-group col-md-5 offset-2">
                            <input class="form-control" type="text" name="prenom" id="nom" placeholder="Nom">
                        </div>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="objet" id="objet" placeholder="Objet">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" id="message" placeholder="Message"></textarea>
                    </div>
                    <div class="float-right">
                        <button class="btn btn-lg bord-black white">ENVOYER</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mg-b-50 mg-l-435">
            <img src="{{ asset('images/skin11r.png') }}" />
        </div>
        <div class="row mg-b-50 mg-l-50 f-s-20" >
            <div class="col-md-3">
                <div class="bold f-s-25">A Propos</div>
                <div>Prestation</div>
                <div>Equipe</div>
                <div>Historique</div>
            </div>
            <div class="col-md-3 ">
                <div class="bold f-s-25">Projets</div>
                <div>Projets en cours</div>
                <div>Projets en attente</div>
                <div>Projets réalisés</div>
            </div>
            <div class="col-md-3 ">
                <div class="bold f-s-25">Projets</div>
                <div>Projets en cours</div>
                <div>Projets en attente</div>
                <div>Projets réalisés</div>
            </div>
            <div class="col-md-3 ">
                <div class="bold f-s-25">Projets</div>
                <div>Projets en cours</div>
                <div>Projets en attente</div>
                <div>Projets réalisés</div>
            </div>
        </div>
        <div class="pd-l-45-p f-s-15">ARS-GROUP 2019</div>
    </footer>
</div>
<script>
    $(document).ready(function(){
        $('.navbar-nav').find('a.nav-link').each(function(e){
            if($(this).attr('href') === document.location.href){
                console.log($(this).attr('href'));
                $(this).addClass('current').addClass('button');
            }
        })
    })
</script>
</body>
</html>
