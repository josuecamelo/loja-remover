<?php
require_once('./database.php');

foreach ($bd as $produto) {
?>
    <div class="col-md-4 mt-2">
        <div class="card">
            <div class="card-body">
                <div class="card-img-actions">
                    <img src="<?php echo $produto['url']; ?>" class="img-fluid" alt="">
                </div>
            </div>
            <div class="card-body bg-light text-center">
                <div class="mb-2">
                    <h6 class="font-weight-semibold mb-2"> <a href="#" class="text-default mb-2" data-abc="true"><?php echo $produto['nome']; ?></a> </h6>
                </div>
                <h3 class="mb-0 font-weight-semibold">R$ <?php echo number_format($produto['valor'],2, ',', ''); ?></h3>
               <button type="button" class="btn bg-cart"><i class="fa fa-cart-plus mr-2"></i> Adicionar no Carrinho</button>
            </div>
        </div>
    </div>
<?php
}
?>
