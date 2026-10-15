<?php

# Nossa primeira classe

namespace App;

class Produto
{
    public function __construct(
        public string $nome,
        public float $preco
    ) {}

    public function getNome(): string
    {
        return $this->nome;
    }
    public function getPreco(): float {
        return $this->preco;
    }
}