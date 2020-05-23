<?php 

     include("cabecalho-cliente.php");
     include("conexaoMySQL.php");
     include("crud-cliente.php");

      $codigo = $_GET['ID'];
      $cliente = selectUpdate_Cliente($conexao,$codigo);
?>

	<h1>DADOS DO CLIENTE</h1>

		<form action="update-cliente.php" method="post">
      
      <table class="table">
				<tr>
          			<td>Nome Completo do Cliente:</td>  
        			<td> 
        				<input class="form-control" type="text" placeholder="EX.: CARLOS EDUARDO DOS SANTOS LEITE" name="nome" value="<?=$cliente['NOME']?>"autofocus/><br/>
        			</td>
        		</tr>
				<tr>
          			<td>E-mail do Cliente:</td>  
        			<td> 
        				<input class="form-control" type="text" placeholder="EX.: carlos.eduardo@gmail.com" name="email" value="<?=$cliente['EMAIL']?>"/><br/>
        			</td>
        		</tr>
            
            <input type="hidden" name="ID" value="<?=$cliente['CODIGO']?>"/>


				<tr>
		  			<td><input class="btn btn-light" type="submit" value="ATUALIZAR"/>
          			</td>
          			<td></td>
				</tr>
      		</table>


    	</form>
    	
<?php include("rodape.php"); ?>