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
    <div class="dropdown">
        <button class="dropbtn btn btn-primary" id="cart">
            <i class="fa fa-shopping-cart"></i> Total no Carrinho: R$<span class="badge total">0,00</span>
        </button>
        <div class="dropdown-content">
          <div class="tableCarrinho">
          
          </div>
        </div>
    </div>
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
</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src=" bootstrap/js/bootstrap.min.js "></script>
<script src="js/script.js"></script>
<style>
    .dropbtn {
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
    }
    .dropdown {
        position: relative;
        display: inline-block;
    }
    .dropdown-content {
        display: none;
        left: -100px;
        position: absolute;
        background-color: #f1f1f1;
        width: 100% !important;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }
    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }
    .dropdown-content a:hover {background-color: #ddd;}
    .dropdown:hover .dropdown-content {display: block;}
    .dropdown:hover .dropbtn {background-color: #3e8e41;}

    table.table > tbody > tr td, table.table > tbody > tr th, table.table > thead > tr td, table.table > thead > tr th {
        font-size: 11px;
        padding: 3px 7px !important;
        vertical-align: middle;
    }
    
    .table tbody>tr>td {
        padding: 0 !important;
    }
</style>
</body>
</html>
