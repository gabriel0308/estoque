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

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

    <!-- Fonts -->
    
    <!-- Styles -->

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

    
</head>
<body>
    <div id="app">

            <ul id="computadores1" class="dropdown-content pink darken-4">
                    <li><a href="/cadastrarComputador" class="dropdown-item white-text">Cadastrar Computador</a></li>   
                    <li><a href="/listagemComputadores" class="dropdown-item white-text">Listar Computadores</a></li>
            </ul>

            <ul id="computadores2" class="dropdown-content pink darken-4">
                    <li><a href="/cadastrarComputador" class="dropdown-item white-text">Cadastrar Computador</a></li>   
                    <li><a href="/listagemComputadores" class="dropdown-item white-text">Listar Computadores</a></li>
            </ul>
            
            <ul id="tickets1" class="dropdown-content pink darken-4">
                <li><a href="/cadastroTicket" class="dropdown-item white-text">Cadastrar Ticket</a></li>   
                <li><a href="listagemTickets" class="dropdown-item white-text">Listar Tickets</a></li>
            </ul>

            <ul id="tickets2" class="dropdown-content pink darken-4">
                <li><a href="/cadastroTicket" class="dropdown-item white-text">Cadastrar Ticket</a></li>   
                <li><a href="listagemTickets" class="dropdown-item white-text">Listar Tickets</a></li>
            </ul>
        
            <nav class="pink darken-4">
                <div class="container">
                    <div class="nav-wrapper">
                        <a class="brand-logo" style="padding: 10px;" href="{{ url('/') }}"><img src="{{asset('img\logo.png')}}"></a>
                        
                            @guest                                
                            @else
                            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                            <ul class="right hide-on-med-and-down" id="nav-mobile">
                                @auth('admin')
                                    <li><a href="/listagemAnalistas" class="dropdown-item white-text">Listar Analistas</a></li>
                                @endauth
                                <li><a class="dropdown-trigger white-text" href="#!" data-target="computadores1">Gerenciar Computadores<i class="material-icons right white-text">arrow_drop_down</i></a></li>
                                <li><a class="dropdown-trigger white-text" href="#!" data-target="tickets1">Gerenciar Tickets<i class="material-icons right white-text">arrow_drop_down</i></a></li>
                                <li><a href="listaMovimentacoes">Movimentações</a></li>
                                <li><a class="right" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
                            </ul>
                            
                            <ul class="sidenav pink darken-4" id="mobile-demo">
                                @auth('admin')
                                    <li><a href="/listagemAnalistas" class="dropdown-item white-text">Listar Analistas</a></li>
                                @endauth
                                <li><a class="dropdown-trigger white-text" href="#!" data-target="computadores2">Gerenciar Computadores<i class="material-icons right white-text">arrow_drop_down</i></a></li>
                                <li><a class="dropdown-trigger white-text" href="#!" data-target="tickets2">Gerenciar Tickets<i class="material-icons right white-text">arrow_drop_down</i></a></li>
                                <li><a class="white-text" href="listaMovimentacoes">Movimentações</a></li>
                                <li><a class="white-text" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
                            </ul>       

                            @endguest
                    </div>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                    </form>
                </div>
            </nav>

        <main>
            @yield('content')
        </main>
    </div>
    <script src="{{ asset('js/app.js')}}"></script>
</body>
</html>
