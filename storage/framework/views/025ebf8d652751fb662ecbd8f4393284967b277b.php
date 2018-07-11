<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Estoque</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="https://fonts.gstatic.com"> -->

    <!-- Styles -->

    <!-- Materialize -->
    <?php echo MaterializeCSS::include_full(); ?>    
    
</head>
<body>
    <div id="app">
        
            <ul id="dropdown1" class="dropdown-content">
                    <li><a href="/cadastroAnalista" class="dropdown-item">Cadastrar Analista</a></li>
                    <li><a href="/listagemAnalistas" class="dropdown-item">Listar Analistas</a></li>
            </ul>
        
            <nav class="pink darken-4">
                <div class="container">
                    <div class="nav-wrapper ">
                        <ul id="nav-mobile" class="left hide-on-med-and-down">
                            <?php if(auth()->guard()->guest()): ?>
                                <li><a class="navbar-brand" href="<?php echo e(url('/')); ?>">Estoque</a></li>
                            <?php else: ?>
                                <li><a class="navbar-brand" href="<?php echo e(url('/')); ?>">Estoque</a></li>
                                <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Gerenciar Analistas<i class="material-icons right">arrow_drop_down</i></a></li>
                                <li><a class="navbar-brand" href="/cadastroFabricante">Fabricante</a></li>
                                <li><a class="navbar-brand" href="/cadastroTipo">Tipo</a></li>
                                <li><a class="navbar-brand" href="/cadastrarModelo">Modelo</a></li>
                                <li><a class="navbar-brand" href="/cadastrarEquipamento">Equipamento</a></li>       
                            <?php endif; ?>
                        </ul>
                    </div>
                

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav mr-auto">

                            </ul>

                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ml-auto">
                                <!-- Authentication Links -->
                                <?php if(auth()->guard()->guest()): ?>
                                <?php else: ?>
                                        <a id="navbarDropdown" class="" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                        </a>

                                        <div class="" aria-labelledby="navbarDropdown">
                                            <a class="right" href="<?php echo e(route('logout')); ?>"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                <?php echo e(__('Logout')); ?>

                                            </a>

                                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                                <?php echo csrf_field(); ?>
                                            </form>
                                        </div>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
</body>
</html>
