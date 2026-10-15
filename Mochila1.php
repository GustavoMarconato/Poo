<?php

namespace App;

class Mochila1{

    private array $itens = [];

    public function adicionarItem(Item $item): void{
        $this->itens[] = $item;
    }

    public function listarItens(): void{
        foreach($this->itens as $item){
            echo "Item {$item->getNome()} / {$item->getPeso()}kg" . PHP_EOL;
        }
    }

    //criar metodo que retorna o peso total da mochila - fazer testes

    public function getPeso(): float{
        $total = 0;
        foreach($this->itens as $item){
            $total += $item->getPeso();
        }

        return $total;
    }
}