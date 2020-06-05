<?php 
	include 'header.php'; 
	include 'db.php';
	include 'conexao.php';

	
	$nomeproduto = $_POST['nomeproduto'];
	$codproduto = $_POST['codproduto'];
	$datacompra = $_POST['datacompra'];
	$tipoproduto = $_POST['tipoproduto'];
	$precocompra = $_POST['precocompra'];
	$precovenda = $_POST['precovenda'];
	
	atualizarProduto($conexao,$codproduto,$nomeproduto,$datacompra,$tipoproduto,$precocompra,$precovenda);

	header('Location: visualizar.php');
	die();

?>