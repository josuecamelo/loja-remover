<?php
    require_once('database.php');
    require_once('sessions.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!--Enconding-->
    <meta charset="utf-8">
    <!--Titulo-->
    <title>Loja Virtual</title>
    <!--Descrição-->
    <meta name="description" content="Lojinha">
    <!--Bootstrap-->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Estilos customizados para esse template -->
    <link href="css/album.css" rel="stylesheet">
    
    <!--External Fonts-->
    <link href='//fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=PT+Sans|PT+Serif" rel="stylesheet">
</head>
<body>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">Lojinha da Esquina S/A</h5>
<!--    <nav class="my-2 my-md-0 mr-md-3">-->
<!--        <a class="p-2 text-dark" href="#">Features</a>-->
<!--        <a class="p-2 text-dark" href="#">Premium</a>-->
<!--        <a class="p-2 text-dark" href="#">Suporte</a>-->
<!--        <a class="p-2 text-dark" href="#">Preços</a>-->
<!--    </nav>-->
<!--    <a class="btn btn-outline-primary" href="#">Cadastro</a>-->
</div>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Os melhores produtos você encontra aqui!</h1>
    <p class="lead">Venha gastar bastante conosco, parcelamos tudo em parcelas eternas.</p>
</div>

<div class="container">
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row products-category">
                <?php require_once('componentes/listar_produtos.php') ?>
            </div>
        </div>
    </div>

    <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
            <div class="col-6 col-md">
                <p class="mt-5 mb-3 text-muted text-center">Lojinha da Esquina S/A</p>
            </div>
        </div>
    </footer>
    
    <?php require_once('componentes/carrinho_listar.php') ?>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src=" bootstrap/js/bootstrap.min.js "></script>
<script src="js/script.js"></script>
</body>
</html>
