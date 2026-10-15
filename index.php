<?php

require_once __DIR__ . '/vendor/autoload.php';

/* use App\Produto;
use App\Pedido;

use App\Mochila;
use App\Jogador;

$produto =  new Produto("Teclado Reddragon", 399.90);
$pedido = new Pedido($produto, 14);

echo "Custo pedido: R$ {$pedido->total()}";
echo $pedido->detalhes()   . PHP_EOL;

/////

function coletar($mochila, $peso): void {
    if ($mochila->adicionarPeso($peso)) {
        return;
    }

    echo "Ops! Não foi possível adicionar {$peso}kg na mochila."  . PHP_EOL;
}


$mochila = new Mochila(60);
$jogador =  new Jogador("Luiz", 100, $mochila);

$jogador->status();
$mochila->adicionarPeso(5);
$mochila->adicionarPeso(20);
$mochila->adicionarPeso(30);
$jogador->status(); */


use App\Item;
use App\Mochila1;

$espada = new Item("Espada", 5);
$magia = new Item("Poçao", 2);
$escudo = new Item("Escudo", 9);

$mochila = new Mochila1();
$mochila->adicionarItem($espada);
$mochila->adicionarItem($magia);
$mochila->adicionarItem($escudo);

$mochila->listarItens();
echo "Peso total da mochila: {$mochila->getPeso()}kg" . PHP_EOL;

$livro = new Item("Livro", 1);


// ItemPedido: produto<string>, quantidade<int>, preco<float>
// Pedido = itens<array>
// na classe de pedido voce deve conseguir criar cada item que ira compor o pedido, deve ser possivel calcular o sutbtotal de cada item.
// a classe pedido ira agrupar todos os itens do pedido
// deve ser possivel adicionar novos itens, calcular o total, listar todos os itens.

use App\ItemPedido;
use App\Pedido;

$item1 = new ItemPedido("Hamburguer", 2, 25);
$item2 = new ItemPedido("Coca", 2, 5);

$pedido = new Pedido();
$pedido->adicionarItem($item1);
$pedido->adicionarItem($item2);

$pedido->listarItens();

echo "Total: {$pedido->calcularTotal()}" . PHP_EOL;

$item3 = new ItemPedido("Hamburguer", 2, 25);

//$pedido->adicionarItem($item3);

$pedido->listarItens();

$pedido->removerItem("Coca");

$pedido->listarItens();


