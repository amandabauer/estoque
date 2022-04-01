<?php

class Arquivo
{
    private $arquivo = "../file/produtos.txt";



        public function buscaConteudoArquivo() {
        $arquivo = fopen($this->arquivo, "r") or die("Erro ao abrir o arquivo!");
        $produtos = [];
        while (($linha = fgets($arquivo)) !== false) {
            $array = explode(";", $linha);

            $produto = new Produto();
            $produto->setNome($array[0]);
            $produto->setValor($array[1]);
            $produto->setQuantidade($array[2]);

            $produtos[] = $produto;
        }

        fclose($arquivo);
        return $produtos;
    }

    public function salvaProdutoArquivo($produto) {
        $arquivo = fopen($this->arquivo, "a") or die("Erro ao abrir o arquivo!");
        fwrite($arquivo, $this->buscaTextoProduto($produto));
        fclose($arquivo);
    }

    private function buscaTextoProduto($produto) {
        return "{$produto->getNome()};{$produto->getValor()};{$produto->getQuantidade()}\n";
    }
}
