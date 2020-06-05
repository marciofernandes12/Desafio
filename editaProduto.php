<?php 
	include 'header.php'; 
	include 'db.php';
	include 'conexao.php';

$codproduto = $_POST['$codproduto'];
$nomeproduto = $_POST['nomeproduto'];
$datacompra = $_POST['datacompra'];
$tipoproduto = $_POST['tipoproduto'];
$precocompra = $_POST['precocompra'];
$precovenda = $_POST['precovenda'];

	atualizarProduto($conexao,$codproduto,$nomeproduto,$datacompra,$tipoproduto,$precocompra,$precovenda);
	header("Location: visualizar.php");
	die();

	?>