<?php

// tabela com os produtos cadastrados
// link para cadastrar um novo produto

/*

1 - Criar classe de produto com os atributos (usar set e get -> model)
2 - Criar classe controller com as funções de salvar/ler o arquivo (https://www.w3schools.com/php/php_file_create.asp)
3 - Criar view com o formulario para cadastrar os produtos
3.1 - Passar via post ($variavel = filter_input_array(INPUT_POST)) para controller. Esse controller vai pegar os dados (atributo name dos campos do form)
3.2 - Criar um objeto Produto com os dados buscados da $variavel e salvar ele usando a função salvaProdutoArquivo($produto)
3.3 - Criar link para voltar para a listagem
4 - Criar pagina (index) para listar os dados do arquivo retornado pela função buscaConteudoArquivo()
4.1 - Criar link para a página de criar um produto

*/

?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Novo produto</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
<div class="container">
<div class="alert alert-warning" role="alert">
 Clique aqui para <a href="view/novoProduto.php" class="alert-link">Cadastrar novo produto</a>. 
</div>

<a href="file/produtos.txt"><input type="button" class="btn-primary " name="acao" value="Listar"></a>
