<?php
class Produto {
    public $nome;
    public $preco;
    public $quantidade;

    public function exibirDetalhes() {
        return "Produto: " . $this->nome . "\nPreço: R$" . $this->preco . "\nQuantidade: " . $this->quantidade . " UND";
    }
    
    public function calcularTotal() {
        return "R$" . $this->preco * $this->quantidade;
    }
}

$produto = new Produto();
$produto->nome = "Camiseta";
$produto->preco = 50;
$produto->quantidade = 3;

echo $produto->exibirDetalhes() . "\n";
echo "Total: " . $produto->calcularTotal();
?>