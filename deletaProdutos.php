<?php 
	include("header.php"); 
	include("db.php");
	include("conexao.php");

	$codproduto = $_POST['codproduto'];
	print_r($codproduto);
	//deletarProduto($conexao, $codproduto);
	header("Location: visualizar.php");
	die();