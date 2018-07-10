<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Estoque</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="https://fonts.gstatic.com"> -->

    <!-- Styles -->

    <!-- Materialize -->
    {!! MaterializeCSS::include_full() !!}    
    
</head>
<body>
    <div id="app">
        
            <ul id="dropdown1" class="dropdown-content">
                    <li><a href="/cadastroAnalista" class="dropdown-item">Cadastrar Analista</a><li>
                    <li><a href="/cadastroTipo" class="dropdown-item">Cadastrar Tipo</a></li>
            </ul>

            <ul id="dropdown1" class="dropdown-content">
                    <li><a href="/cadastroAnalista" class="dropdown-item">Cadastrar Analista</a><li>
                    <li><a href="/cadastroTipo" class="dropdown-item">Cadastrar Tipo</a></li>
            </ul>
        
        <nav>
            <div class="nav-wrapper #ff5252 pink darken-4">
                <ul id="nav-mobile" class="left hide-on-med-and-down">
                    @guest
                        <li><a class="navbar-brand" href="{{ url('/') }}">Estoque</a></li>
                    @else
                        <li><a class="navbar-brand" href="{{ url('/') }}">Estoque</a></li>
                        <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Gerenciar Analistas<i class="material-icons right">arrow_drop_down</i></a></li>
                    @endguest
                </ul>
            </div>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ '/' }}">{{ __('Login') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="" aria-labelledby="navbarDropdown">
                                    <a class="" href="{{ route('logout') }}"
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
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="{{ asset('js/app.js')}}"></script>
</body>
</html>
