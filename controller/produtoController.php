<?php

require_once "../model/produto.php"; 
require_once "arquivo.php"; 

$postProd = filter_input_array(INPUT_POST);
if (array_key_exists('cadastrar', $postProd)) {
    $prod = new Produto(); 
    $prod->setNome($postProd['nome']);
    $prod->setValor($postProd['valor']);
    $prod->setQuantidade($postProd['quantidade']);
    $arquivo = new Arquivo();
    $arquivo->salvaProdutoArquivo($prod);

    header('Location: ../index.php');
}
