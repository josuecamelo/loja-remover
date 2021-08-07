<?php
require_once('../database.php');
require_once('../sessions.php');
?>
<div class="row">
    <div class="col-md-4 mt-2">
       <table class="table table-bordered">
           <thead>
           <tr>
                <th>Nome</th>
                <th>Quant</th>
                <th >Vlr. Unit.</th>
                <th >Total</th>
<!--                <th >Ações</th>-->
           </tr>
           </thead>
           <tbody>
                <?php
                foreach($_SESSION['carrinho'] as $key => $item):
                    if(isset($bd[$key])){
                ?>
                <tr>
                    <td ><?=$bd[$key]['nome']; ?></td>
                    <td ><?=$item->quantidade; ?></td>
                    <td >R$ <?=number_format($item->valor,2,',','.'); ?></td>
                    <td >R$ <?=number_format(($item->valor * $item->quantidade),2,',','.'); ?></td>
<!--                    <td >-->
<!--                        <button data-produto-id="--><?php //echo $key ?><!--" class="btn btn-sm btn-primary somar">+</button>-->
<!--                        <button data-produto-id="--><?php //echo $key ?><!--" class="btn btn-sm btn-info subtrair">-</button>-->
<!--                        <button data-produto-id="--><?php //echo $key ?><!--" class="btn btn-sm btn-danger remover">Remover</button>-->
<!--                    </td>-->
                </tr>
                <?php
                    }
                endforeach;
                ?>
           </tbody>
       </table>
    </div>
</div>
