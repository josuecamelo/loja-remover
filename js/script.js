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

    atualizarValorCarrinho();

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
            })
            .fail(function(jqXHR, textStatus, msg){
                alert(msg);
            });
    });
});
