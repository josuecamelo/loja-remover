<?php
require_once('sessions.php');

class CarrinhoDeCompras
{
    private $carrinho = [];
    
    //Atualiza os dados da sessão

    public function inserirOuAtualizar($produto)
    {
        //Pega os dados atualizados da sessão
        $this->getCarrinho();
        $codigo = $produto->codigo;
        unset($produto->codigo);
        
        if (!array_key_exists($codigo, $this->carrinho)) {
            $produto->quantidade = 1;
            $this->carrinho[$codigo] = $produto;
        } else {
            $produto = $this->carrinho[$codigo];
            $produto->quantidade += 1;
            
            $this->carrinho[$codigo] = $produto;
        }
        
        //Atualiza os dados da sessão
        $this->atualizarDados();
    }
    
    //Pega os dados da sessão

    public function getCarrinho()
    {
        if (isset($_SESSION["carrinho"])) {
            $this->carrinho = $_SESSION["carrinho"];
        }
    }
    
    //inserir ou atualizar

    public function atualizarDados()
    {
        $_SESSION["carrinho"] = $this->carrinho;
        echo "<pre>";
        var_dump($_SESSION);
        echo "</pre>";
    }
    
    //Remove um item do carrinho de compras

    public function removeItem($produto)
    {
        $this->getCarrinho();
        
        $codigo = $produto->codigo;
        unset($this->carrinho[$codigo]);
        
        $this->atualizarDados();
    }
    
    //Pega o valor total das compras do usuário
    public function getTotal()
    {
        $this->getCarrinho();
        $total = 0;
        
        foreach ($this->carrinho as $produto) {
            $total += $produto->valor * $produto->quantidade;
        }
        
        return number_format($total,2,',','.');
    }
    
    public function diminuirQuantidadeItem($produto)
    {
        $this->getCarrinho();
        $codigo = $produto->codigo;
    
        if (array_key_exists($codigo, $this->carrinho)) {
            $produto = $this->carrinho[$codigo];
            $produto->quantidade -= 1;
    
            if($produto->quantidade < 1){
                $produto->codigo = $codigo;
                $this->removeItem($produto);
            }else{
                $this->carrinho[$codigo] = $produto;
            }
        }
        
        $this->atualizarDados();
    }
    
    public function aumentarQuantidadeItem($produto)
    {
        $this->getCarrinho();
        $codigo = $produto->codigo;
        
        $produto = $this->carrinho[$codigo];
        $produto->quantidade += 1;
        $this->carrinho[$codigo] = $produto;
        
        $this->atualizarDados();
    }
}
