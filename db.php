    <?php
    include ('header.php');
    include ('conexao.php');
    ?>
    <?php
        function cadastrarProduto($conexao,$codproduto,$nomeproduto,$datacompra,$tipoproduto,$precocompra,$precovenda){
            $query = "insert into produtos (codproduto,nomeproduto,datacompra,tipoproduto,precocompra,precovenda) 
            VALUES ('{$codproduto}','{$nomeproduto}','{$datacompra}','{$tipoproduto}','{$precocompra}','{$precovenda}')";
            mysqli_query($conexao,$query);
        }
        function visualizarProdutos($conexao){
            ?>  
            <div class="table-responsive-sm">
                <table id="produto" class="table table-striped">
                    <thead>
                    <tr>
                        <th>Nome Produto</th>
                        <th>Data Compra</th>
                        <th>Tipo Produto</th>
                        <th>Preco Compra</th>
                        <th>Preço Venda</th>
                        <th>Alterar</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                <tbody>
        <?php 		
                $produto = mysqli_query($conexao,"select * from produtos");
                while($resultado = mysqli_fetch_assoc($produto)){
        ?>
            
                    <tr>
                       
                        <td><?=$resultado['nomeproduto'] ?></td>
                        <td><?=$resultado['datacompra'] ?></td>
                        <td><?=$resultado['tipoproduto'] ?></td>
                        <td><?=$resultado['precocompra'] ?></td>
                        <td><?=$resultado['precovenda'] ?></td>
                        <td><a class="btn btn-primary" href="altera.php?id=<?=$resultado['codproduto']?>">Alterar</a></td>
                        <form method="post" action="deletaProdutos.php">
                            <input type="hidden" name="codproduto" value="<?=$resultado['codproduto']?>">
                            <td><button class="btn btn-danger">Excluir</button></td>
                        </form>
                    </tr>
                
            <?php
                } 
            }
            function deletarProduto($conexao,$codproduto){
                mysqli_query($conexao,"delete from produtos where codproduto={$codproduto}");		
            }
            function atualizarProduto($conexao,$nomeproduto,$datacompra,$tipoproduto,$precocompra,$precovenda){
                mysqli_query($conexao, "update produto set nomeproduto='{$nomeproduto}',datacompra='{$datacompra}',tipoproduto='{$tipoproduto}',precocompra='{$precocompra},precovenda='{$precovenda}'
                 where codproduto={$codproduto}");
            }
            function buscaProduto($conexao,$codproduto){
                $resultado = mysqli_query($conexao,"select * from produtos");
                return mysqli_fetch_assoc($resultado);
            }?>
            </tbody>
                    </table>

    <?php 
    function cadastrarCliente($conexao,$nomefantasia,$razaosocial,$tipocliente,$cpf_cnpj,$endereco,$complemento,$cidade,$estado,$cep){
            $query = "insert into cliente VALUES
            ('default','{$nomefantasia}','{$razaosocial}','{$tipocliente}','{$cpf_cnpj}','{$endereco}','{$complemento}','{$cidade}','{$estado}','{$cep}')";
            mysqli_query($conexao,$query);
        }
        function visualizarCliente($conexao){
            ?>    <div class="table-responsive-lg">
                <table id="cliente" class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nome Fantasia</th>
                        <th>Razão Social</th>
                        <th>CPF/CNPJ</th>
                        <th>Endereço</th>
                        <th>Complemento</th>
                        <th>Cidade</th>
                        <th>Estado</th>
                        <th>CEP</th>
                        <th>Alterar</th>
                        <th>Remover</th>
                    </tr>
                    </thead>
                    <tbody>
        <?php 		
                $cliente = mysqli_query($conexao,"select * from cliente");
                while($resultado = mysqli_fetch_array($cliente)){
        ?>
                
                        <tr>
                        <td><?=$resultado['nomefantasia'] ?></td>
                        <td><?=$resultado['razaosocial'] ?></td>
                        <td><?=$resultado['cpf_cnpj'] ?></td>
                        <td><?=$resultado['endereco'] ?></td>
                        <td><?=$resultado['complemento'] ?></td>
                        <td><?=$resultado['cidade'] ?></td>
                        <td><?=$resultado['estado'] ?></td>
                        <td><?=$resultado['cep'] ?></td>
                        <td><a  class="btn btn-primary" href="alterarProduto.php?id=<?=$resultado['Id']?>">Alterar</a></td>
                        <form method="post" action="deletaClientes.php">
                            <input type="hidden" name="idcliente" value="<?=$resultado['idcliente']?>">
                            <td><button class="btn btn-danger">Remover</button></td>
                        </form>
                    </tr>
                    <?php
            } 
        }
        function deletarCliente($conexao, $idcliente){
            mysqli_query($conexao,"delete from cliente where idcliente={$idcliente}");		
        }
        function atualizarCliente($conexao,$id,$nome,$idade,$cpf,$sexo){
            mysqli_query($conexao, "update clientes set Nome='{$nome}',Idade={$idade},Cpf='{$cpf}',Sexo='{$sexo}' where Id={$id}");
        }
        function buscaCliente($conexao,$id){
            $resultado = mysqli_query($conexao,"select * from clientes");
            return mysqli_fetch_assoc($resultado);
        }?>
        </tbody>
                </table>