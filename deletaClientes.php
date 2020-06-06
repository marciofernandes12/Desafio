<?php

include 'db.php';


$idcliente = $_POST['idcliente'];

deletarCliente($conexao, $idcliente);
header("Location: visualizarClientes.php");
die();
