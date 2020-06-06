<?php

include 'db.php';


$codproduto = $_POST['codproduto'];
deletarProduto($conexao, $codproduto);
header("Location: visualizar.php");
die();
