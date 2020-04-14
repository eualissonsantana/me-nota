<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{url('assets/js/app.js')}}" defer></script>
    <script src="{{url('assets/js/script.js')}}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
</head>
<body id="top" onload="startPage()">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light barra-top" id="topbar">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <section class="row container-fluid d-flex justify-content-between ">
                    <!-- Left Side Of Navbar -->
                        @guest

                        @else
                            <section class="left-side row">
                                
                                <section class="teste-logo">
                                    <div>
                                        <h2>LE</h2>
                                    </div>
                                </section>
                                <section class="titulo-projeto">
                                    <section class="row title-quadro">
                                        <h3>Projeto Me Lembra (não sei se vai ser mais)</h3>
                                    </section>
                                    
                                    <ul class="row opcoes nav nav-tabs pull-left ulist sel-list" role="tablist">
                                        <li role="presentation" class="f-item active" id="li-lista">
                                            <a  href="#" id="lista" class="" onclick="isActive(this.id)" role="tab">Lista</a>
                                        </li>
                                        <li role="presentation" class="f-item " id="li-quadro">
                                            <a href="{{url('tarefas/quadro')}}" id="quadro" onclick="isActive(this.id)" role="tab">Quadro</a >
                                        </li>
                                        <li role="presentation" class="f-item" id="li-visao">
                                            <a href="{{url('tarefas/visao')}}" id="visao" onclick="isActive(this.id)" role="tab">Visão geral</a>
                                        </li>
                                        <li role="presentation" class="f-item">
                                            <a href="{{url('tarefas/visao')}}" id="visao" onclick="isActive(this.id)" role="tab">Cronograma</a>
                                        </li>
                                        <li role="presentation" class="f-item">
                                            <a href="{{url('tarefas/visao')}}" id="visao" onclick="isActive(this.id)" role="tab">Calendário</a>
                                        </li>
                                        <li role="presentation" class="f-item">
                                            <a href="{{url('tarefas/visao')}}" id="visao" onclick="isActive(this.id)" role="tab">Progresso</a>
                                        </li>
                                    </ul>
                                </section>
                            </section>
                        @endguest

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Entrar') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Cadastrar') }}</a>
                                    </li>
                                @endif
                            @else
                                <hr id="perfil-row">
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><img src=\assets\img\search.png> </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><img src=\assets\img\notification.png> </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </section>
                </div>
            </div>
        </nav>

        <main class="main">
            @yield('content')
        </main>
    </div>
</body>
</html>
