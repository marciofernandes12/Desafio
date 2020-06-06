<?php
include 'header.php';
?>

<h1 style="text-align: center;">Cadastro de Produtos</h1>
<div class="form-group">
  <form name="cadastroprod  " action="cadastraProdutos.php" method="post" class="form-group">
    <div class="form-group">
      <label for="nomeproduto">Nome do Produto</label>
      <input type="text" class="form-control" name="nomeproduto" placeholder="Digite o nome do produto" required>

    </div>
    <div class="form-group">
      <label for="codigoproduto">Código Produto</label>
      <input type="text" class="form-control" name="codproduto" pattern="[0-9]+$" placeholder="Ex: 123" required>

    </div>
    <div class="form-group">
      <label for="datacompra">Data da Compra</label>
      <input type="date" class="form-control" name="datacompra" placeholder="Digite o CPF ou CNPJ" pattern="[0-9]+$" required>
    </div>
    <div class="form-group">
      <label for="tipoproduto">Tipo</label>
      <select required class="form-control form-control-lg" name="tipoproduto">
        <option selected>Selecione o tipo do produto</option>
        <option name="informatica">Informática</option>
        <option name="escritorio">Escritório</option>
        <option name="limpeza">Limpeza</option>
      </select>

      <div class="form-group">
        <label for="precocompra">Preço de Compra</label>
        <input type="text" class="form-control" id="precocompra" name="precocompra"  placeholder="Digite o preço de compra">
      </div>
      <div class="form-group">
        <label for="precovenda">Preço de Venda</label>
        <input type="text" class="form-control" name="precovenda" placeholder="Digite o preço de venda" required>
      </div>


      <button type="submit" class="btn btn-primary">Cadastrar</button>

      <?php include 'footer.php'; ?>