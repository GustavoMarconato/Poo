<?php

namespace App;

class ItemPedido{

    public function __construct(
        private string $produto,
        private int $quantidade,
        private float $preco
    ){}

    public function calcularSubTotal(): float{
        return $this->quantidade * $this->preco;
    }

    public function getProduto(): string{
        return $this->produto;
    }
     
    public function getQuantidade(): int{
        return $this->quantidade;
    }

    public function getPreco(): float{
        return $this->preco;
    }
}
