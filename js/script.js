$(document).ready(function(){
    atualizarValorCarrinho = function(){
        $.ajax({
            url : "carrinho-controller.php",
            type : 'get',
            data : {

            },
            beforeSend : function(){

            }
        })
            .done(function(msg){
                $('.total').html(msg);
            })
            .fail(function(jqXHR, textStatus, msg){
                alert(msg);
            });
    }

    listarCarrinho = function(){
        $.ajax({
            url : "componentes/carrinho_listar.php",
            type : 'get',
        })
            .done(function(msg){
                $('.tableCarrinho').html(msg);
            })
            .fail(function(jqXHR, textStatus, msg){
                alert(msg);
            });
    }


    atualizarValorCarrinho();
    listarCarrinho();

    $('.adicionar').click(function(){
        let produto = $(this).data('produto-id');

        $.ajax({
            url : "carrinho-controller.php?acao=adicionar&produto-id=" + produto,
            type : 'get',
            data : {

            },
            beforeSend : function(){

            }
        })
            .done(function(msg){
                atualizarValorCarrinho();
                listarCarrinho();
            })
            .fail(function(jqXHR, textStatus, msg){
                alert(msg);
            });
    });

    $('.remover').click(function(){
        let produto = $(this).data('produto-id');

        $.ajax({
            url : "carrinho-controller.php?acao=remover&produto-id=" + produto,
            type : 'get',
            data : {

            },
            beforeSend : function(){

            }
        })
            .done(function(msg){
                atualizarValorCarrinho();
                listarCarrinho();
            })
            .fail(function(jqXHR, textStatus, msg){
                alert(msg);
            });
    });

    $('.somar').click(function(){
        let produto = $(this).data('produto-id');

        $.ajax({
            url : "carrinho-controller.php?acao=aumentar-quantidade-item&produto-id=" + produto,
            type : 'get',
            data : {

            },
            beforeSend : function(){

            }
        })
            .done(function(msg){
                atualizarValorCarrinho();
                listarCarrinho();
            })
            .fail(function(jqXHR, textStatus, msg){
                alert(msg);
            });
    });

    $('.subtrair').click(function(){
        let produto = $(this).data('produto-id');

        $.ajax({
            url : "carrinho-controller.php?acao=diminuir-quantidade-item&produto-id=" + produto,
            type : 'get',
            data : {

            },
            beforeSend : function(){

            }
        })
            .done(function(msg){
                atualizarValorCarrinho();
                listarCarrinho();
            })
            .fail(function(jqXHR, textStatus, msg){
                alert(msg);
            });
    });
});
