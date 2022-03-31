<?php
// formulario de novo produto
// no form apontar para um novo controller onde irá pegar os dados do $_POST
// criar um objeto do tipo Produto e salvar usando a função salvaProdutoArquivo()
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
 Clique aqui para <a href="../index.php" class="alert-link">Acessar os dados dos produtos</a>. 
</div>
<form action="../controller/produtoController.php" method="POST" name="cadastrar">
<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Nome do Produto:</label>
  <input type="text" class="form-control" id="nome" name="nome">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Valor:</label>
  <input type="text" class="form-control" id="valor" name="valor">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Quantidade no estoque:</label>
  <input type="text" class="form-control" id="quantidade" name="quantidade">
</div>
<button type="submit" class="btn btn-warning" id="cadastrar" name="cadastrar">Cadastrar</button>
</form>
</div>
</body>
</html>