<?php
include "header.php";
include "db.php";
include "conexao.php";


visualizarProdutos($conexao);
?>
<a class="btn btn-primary" href="cadastroProdutos.php">Voltar</a>
<?php include("footer.php"); ?>