<?php 
	include("header.php"); 
	include("db.php");
	include("conexao.php");

	$idcliente = $_POST['idcliente'];

	deletarCliente($conexao, $idcliente);
	header("Location: visualizarClientes.php");
	die();