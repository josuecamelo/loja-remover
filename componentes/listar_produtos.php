<?php
require_once('./database.php');
require_once('./sessions.php');

foreach ($bd as $id => $produto) {
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
                    <h6 class="mb-2"><?php echo $produto['nome']; ?></h6>
                </div>
                <h3 class="mb-3 font-weight-semibold">R$ <?php echo number_format($produto['valor'],2, ',', ''); ?></h3>
                <button data-produto-id="<?php echo $id ?>" type="button" class="btn bg-cart adicionar"><i class="fa fa-cart-plus mr-2"></i> Adicionar no Carrinho</button>
            </div>
        </div>
    </div>
<?php
}
?>
