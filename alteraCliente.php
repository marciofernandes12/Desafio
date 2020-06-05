<?php 
  include 'header.php';
  include 'db.php';
  include 'conexao.php';
  
    $idcliente = $_GET['id'];
    $clientes = buscaCliente($conexao,$idcliente);
   ?>

  <h1  style="text-align: center;">Alteração de Clientes</h1> 
    <div class="form-group">  
      <form  action="editaCliente.php" method="post" class="form-group">
      <div class="form-group">
    <input type="hidden" name="idcliente" value="<?=$clientes['idcliente']?>">
      <label for="nomefantasia">Nome Fantasia</label>
      <input type="text" class="form-control" name="nomefantasia" value="<?=$clientes['nomefantasia']?>" required>
      
    </div>
    <div class="form-group">
      <label for="razaosocial">Razão Social</label>
      <input type="text" class="form-control"  name="razaosocial" value="<?=$clientes['razaosocial']?>" required>
      
    </div>
    <div class="form-group">
      <label for="tipocliente">Tipo</label>
    <select class="form-control form-control-lg" name="tipocliente">
    <option name="fisica">Pessoa Física(CPF)</option>
    <option name="juridica">Pessoa Jurídica(CNPJ)</option>
    </select> 

    <div class="form-group">
      <label for="cpf/cnpj">CPF/CNPJ</label>
      <input type="text" class="form-control"  name="cpf_cnpj" value="<?=$clientes['cpf_cnpj']?>" pattern="[0-9]+$" placeholder="Ex: 0000000000" maxlength="16" required> 
    </div>
    <div class="form-group">
      <label for="endereco">Endereço</label>
      <input type="text" class="form-control" name="endereco" value="<?=$clientes['endereco']?>" required>
    </div>
    <div class="form-group">
      <label for="complemento">Complemento</label>
      <input type="text" class="form-control" name="complemento" value="<?=$clientes['complemento']?>" required>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="cidade">Cidade</label>
        <input type="text" class="form-control" name="cidade" value="<?=$clientes['cidade']?>" required>
      </div>
        <div class="form-group col-md-4">
          <label for="estado">Estado</label>
          <select name="estado" class="form-control" value="<?=$clientes['estado']?>"> 
            <option name='Acre'>Acre</option>
            <option name='Alagoas'>Alagoas</option>
            <option name='Amapa'>Amapá</option>
            <option name='Amazonas'>Amazonas</option>
            <option name='Bahia'>Bahia</option>
            <option name='Ceará'>Ceará</option>
            <option name='Espírito Santo'>Espírito Santo</option>
            <option name='Goiás'>Goiás</option>
            <option name='Maranhão'>Maranhão</option>
            <option name='Mato Grosso'>Mato Grosso</option>
            <option name='Mato Grosso do Sul'>Mato Grosso do Sul</option>
            <option name='Minas Gerais'>Minas Gerais</option>
            <option name='Pará'>Pará</option>
            <option name='Paraíba'>Paraíba</option>
            <option name='Paraná'>Paraná</option>
            <option name='Pernambuco'>Pernambuco</option>
            <option name='Piauí'>Piauí</option>
            <option name='Rio de Janeiro'>Rio de Janeiro</option>
            <option name='Rio Grande do Norte'>Rio Grande do Norte</option>
            <option name='Rio Grande do Sul'>Rio Grande do Sul</option>
            <option name='Rondônia'>Rondônia</option>
            <option name='Roraima'>Roraima</option>
            <option name='Santa Catarina'>Santa Catarina</option>
            <option name='São Paulo'>São Paulo</option>
            <option name='Sergipe'>Sergipe</option>
            <option name='Tocantins'>Tocantins</option>
            <option name='Distrito Federal'>Distrito Federal</option>
               
          </select>
      </div>
        <div class="form-group col-md-2">
          <label for="cep">CEP</label>
          <input type="text" class="form-control" name="cep" pattern="[0-9]+$"  placeholder="Ex: 0000000000" maxlength="9" value="<?=$clientes['cep']?>" required>
            </div>
      </div>
    
   
    <button type="submit" class="btn btn-primary">Editar</button>
    </form>
  <?php include 'footer.php'; ?>