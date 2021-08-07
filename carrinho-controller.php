<?php
    require_once ("carrinho.php");
    require_once("database.php");

    $carrinhoObj = new CarrinhoDeCompras();
    $produto = new \stdClass();
 
    $acao = $_GET['acao'];
    $produtoId = $_GET['produto-id'];
    
    switch ($acao){
        case 'adicionar':
            $produto->codigo = $produtoId;
            $produto->valor = $bd[$produtoId]['valor'];
            $carrinhoObj->inserirOuAtualizar($produto);
            break;
        case 'remover':
            $produto->codigo = $produtoId;
            $carrinhoObj->removeItem($produto);
            break;
        case 'diminuir-quantidade-item':
            $produto->codigo = $produtoId;
            $carrinhoObj->diminuirQuantidadeItem($produto);
            break;
        case 'aumentar-quantidade-item':
            $produto->codigo = $produtoId;
            $carrinhoObj->aumentarQuantidadeItem($produto);
            break;
        default:
            echo $carrinhoObj->getTotal();
            break;
    }
