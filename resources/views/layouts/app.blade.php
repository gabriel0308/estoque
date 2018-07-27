<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Estoque</title>

    <!-- Materialize -->
    {!! MaterializeCSS::include_full() !!}  

    <!-- Scripts -->

    <!-- Fonts -->
    
    <!-- Styles -->

    
</head>
<body>
    <div id="app">
        
            <ul id="dropdown1" class="dropdown-content pink darken-4">
                @auth('admin')
                    <li><a href="/cadastroAnalista" class="dropdown-item white-text">Cadastrar Analista</a></li>
                @endauth
                    <li><a href="/listagemAnalistas" class="dropdown-item white-text">Listar Analistas</a></li>
            </ul>

            <ul id="dropdown2" class="dropdown-content pink darken-4">
                @auth('admin')
                    <li><a href="/cadastroAnalista" class="dropdown-item white-text">Cadastrar Analista</a></li>
                @endauth
                    <li><a href="/listagemAnalistas" class="dropdown-item white-text">Listar Analistas</a></li>
            </ul>
        
            <nav class="pink darken-4">
                <div class="container">
                    <div class="nav-wrapper">
                        <a class="brand-logo" style="padding: 10px;" href="{{ url('/') }}"><img src="{{asset('img\logo.png')}}"></a>
                        
                            @guest                                
                            @else
                            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                            <ul class="right hide-on-med-and-down" id="nav-mobile">
                                <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Gerenciar Analistas<i class="material-icons right">arrow_drop_down</i></a></li>
                                <li><a href="/cadastroFabricante">Fabricante</a></li>
                                <li><a href="/cadastroTipo">Tipo</a></li>
                                <li><a href="/cadastrarModelo">Modelo</a></li>
                                <li><a href="/cadastrarComputador">Computador</a></li>
                                <li><a class="right" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
                            </ul>
                            
                            <ul class="sidenav pink darken-4" id="mobile-demo">
                                <li><a class="dropdown-trigger white-text" href="#!" data-target="dropdown2">Gerenciar Analistas<i class="material-icons right white-text">arrow_drop_down</i></a></li>
                                <li><a class="white-text" href="/cadastroFabricante">Fabricante</a></li>
                                <li><a class="white-text" href="/cadastroTipo">Tipo</a></li>
                                <li><a class="white-text" href="/cadastrarModelo">Modelo</a></li>
                                <li><a class="white-text" href="/cadastrarComputador">Computador</a></li>
                                <li><a class="white-text" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
                            </ul>       

                            @endguest
                    </div>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                    </form>
                </div>
            </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="{{ asset('js/app.js')}}"></script>
</body>
</html>
