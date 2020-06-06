<?php
include 'header.php';
include 'db.php';
include 'conexao.php';

$codproduto = $_GET['id'];
$produto = buscaProduto($conexao, $codproduto);


?>
<h1 style="text-align: center;">Alteração de Produtos</h1>
<div class="form-group">

  <form action="editaProduto.php" method="POST" class="form-group">

    <div class="form-group">
      <input type="hidden" id="codproduto" name="codproduto" value="<?= $produto['codproduto'] ?>">
      <label for="nomeproduto">Nome do Produto</label>
      <input type="text" class="form-control" name="nomeproduto" value="<?= $produto['nomeproduto'] ?>">

    </div>
    <div class="form-group">
      <label for="datacompra">Data da Compra</label>
      <input type="date" class="form-control" name="datacompra" value="<?= $produto['datacompra'] ?>">
    </div>
    <div class="form-group">
      <label for="tipoproduto">Tipo Produto</label>
      <select class="form-control form-control-lg" name="tipoproduto" value="<?= $produto['tipoproduto'] ?>">
        <option name="informatica">Informática</option>
        <option name="escritorio">Escritório</option>
        <option name="limpeza">Limpeza</option>
      </select>
    </div>
    <div class="form-group">
      <label for="precocompra">Preço de Compra</label>
      <input type="text" class="form-control" id="precocompra" name="precocompra" value="<?= $produto['precocompra'] ?>">
    </div>
    <div class="form-group">
      <label for="precovenda">Preço de Venda</label>
      <input type="text" class="form-control" name="precovenda" value="<?= $produto['precovenda'] ?>">
    </div>


    <button type="submit" class="btn btn-primary">Editar</button>
  </form>
  <?php include 'footer.php'; ?>