<?php
include_once '../classes/Produto.php';
include_once '../classes/Pessoa.php';
include_once '../classes/Conta.php';
include_once '../classes/Biblioteca.php';
include_once '../classes/Aplicacao.php';
include_once '../classes/Fornecedor.php';
include_once '../classes/Produto.php';
include_once '../classes/Cesta.php';


$fornecedor = new Fornecedor(1, "Mario Junior","Rua Francisco Ribeiro","Montes Claors");


$produto = new Produto(1,"banana",1.5,10,$fornecedor);
$produto2 = new Produto(2,"ameixa",1.4,123,$fornecedor);
$produto3 = new Produto(3,"manga",1.55,12,$fornecedor);
$produto4 = new Produto(4,"beterraba",1.67,11,$fornecedor);

$cesta = new Cesta();
$cesta->AdicionarItem($produto);
$cesta->AdicionarItem($produto2);
$cesta->AdicionarItem($produto3);
$cesta->AdicionarItem($produto4);

echo $cesta->CalcularTotal();
echo "<br>\n";
echo $cesta->ExibirLista();