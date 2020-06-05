<?php 
	include 'header.php'; 
	include 'db.php';
    include 'conexao.php';
    
    $idcliente= $_POST['idcliente'];
    $nomefantasia = $_POST['nomefantasia'];
    $razaosocial = $_POST['razaosocial'];
    $tipocliente = $_POST['tipocliente'];
    $cpf_cnpj = $_POST['cpf_cnpj'];
    $endereco = $_POST['endereco'];
    $complemento = $_POST['complemento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $cep = $_POST['cep'];
    
	atualizarCliente($conexao,$idcliente,$nomefantasia,$razaosocial,$tipocliente,$cpf_cnpj,$endereco,$complemento,$cidade,$estado,$cep);
    echo"<script>alert('Dados Alterados com Sucesso!');</script>";
    header('Location: visualizarClientes.php');
	die();

?>