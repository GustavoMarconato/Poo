<?php

namespace App;

use Exception;

class Pedido{
    
    private array $itens = [];

    public function adicionarItem(ItemPedido $itemPedido): void{
        foreach($this->itens as $item){
            if (strtolower($itemPedido->getProduto()) == strtolower($item->getProduto())){
                throw new Exception("Erro! Nao pode adicionar dois itens iguais");
            }
        }

        $this->itens[] = $itemPedido;
}

    public function removerItem(string $produto): void
    {
        for ($count = 0;$count < count($this->itens); $count++){
            if (strtolower($this->itens[$count]->getProduto()) == strtolower($produto)){
                unset($this->itens[$count]);
            }
        }
    }

    public function calcularTotal(): float{
        $total = 0;
        foreach($this->itens as $item){
            $total += $item->calcularSubTotal();
        }

        return $total;
    }

    public function listarItens(): void{
        foreach($this->itens as $item){
            echo "Item : {$item->getProduto()} / Quantidade: {$item->getQuantidade()}" . PHP_EOL;
        }
    }
}