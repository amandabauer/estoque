<?php

class Produto {

    private $nome;
    private $valor;
    private $quantidade;

    public function getNome() {
        return $this->nome;
    }

    public function getValor() {
        return $this->valor;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }
    
    public function setNome($nome) {
        $this->nome = $nome;
    }
    
    public function setValor($valor) {
        $this->valor = $valor;
    }
    
    public function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

}
