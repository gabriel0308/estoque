<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Estoque</title>

    <!-- Materialize -->
    <?php echo MaterializeCSS::include_full(); ?>  

    <!-- Scripts -->

    <!-- Fonts -->
    
    <!-- Styles -->

    
</head>
<body>
    <div id="app">
        
            <ul id="analistas1" class="dropdown-content pink darken-4">
                    <li><a href="/cadastroAnalista" class="dropdown-item white-text">Cadastrar Analista</a></li>
                    <li><a href="/listagemAnalistas" class="dropdown-item white-text">Listar Analistas</a></li>
            </ul>

            <ul id="analistas2" class="dropdown-content pink darken-4">
                    <li><a href="/cadastroAnalista" class="dropdown-item white-text">Cadastrar Analista</a></li>   
                    <li><a href="/listagemAnalistas" class="dropdown-item white-text">Listar Analistas</a></li>
            </ul>

            <ul id="computadores1" class="dropdown-content pink darken-4">
                    <li><a href="/cadastrarComputador" class="dropdown-item white-text">Cadastrar Computador</a></li>   
                    <li><a href="/listagemComputadores" class="dropdown-item white-text">Listar Computadores</a></li>
            </ul>

            <ul id="computadores2" class="dropdown-content pink darken-4">
                    <li><a href="/cadastrarComputador" class="dropdown-item white-text">Cadastrar Computador</a></li>   
                    <li><a href="/listagemComputadores" class="dropdown-item white-text">Listar Computadores</a></li>
            </ul>
        
            <nav class="pink darken-4">
                <div class="container">
                    <div class="nav-wrapper">
                        <a class="brand-logo" style="padding: 10px;" href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('img\logo.png')); ?>"></a>
                        
                            <?php if(auth()->guard()->guest()): ?>                                
                            <?php else: ?>
                            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                            <ul class="right hide-on-med-and-down" id="nav-mobile">
                                <?php if(auth()->guard('admin')->check()): ?>
                                    <li><a class="dropdown-trigger white-text" href="#!" data-target="analistas1">Gerenciar Analistas<i class="material-icons right white-text">arrow_drop_down</i></a></li>
                                <?php endif; ?>
                                <li><a href="/cadastroFabricante">Fabricante</a></li>
                                <li><a href="/cadastroTipo">Tipo</a></li>
                                <li><a href="/cadastrarModelo">Modelo</a></li>
                                <li><a class="dropdown-trigger white-text" href="#!" data-target="computadores1">Gerenciar Computadores<i class="material-icons right white-text">arrow_drop_down</i></a></li>
                                <li><a class="right" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><?php echo e(__('Logout')); ?></a></li>
                            </ul>
                            
                            <ul class="sidenav pink darken-4" id="mobile-demo">
                                <?php if(auth()->guard('admin')->check()): ?>
                                    <li><a class="dropdown-trigger white-text" href="#!" data-target="analistas2">Gerenciar Analistas<i class="material-icons right white-text">arrow_drop_down</i></a></li>
                                <?php endif; ?>
                                <li><a class="white-text" href="/cadastroFabricante">Fabricante</a></li>
                                <li><a class="white-text" href="/cadastroTipo">Tipo</a></li>
                                <li><a class="white-text" href="/cadastrarModelo">Modelo</a></li>
                                <li><a class="dropdown-trigger white-text" href="#!" data-target="computadores2">Gerenciar Computadores<i class="material-icons right white-text">arrow_drop_down</i></a></li>
                                <li><a class="white-text" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><?php echo e(__('Logout')); ?></a></li>
                            </ul>       

                            <?php endif; ?>
                    </div>

                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                            <?php echo csrf_field(); ?>
                    </form>
                </div>
            </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
</body>
</html>
