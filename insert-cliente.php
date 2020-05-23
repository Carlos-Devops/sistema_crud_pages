 <?php

     include("cabecalho-cliente.php");
     include("conexaoMySQL.php");
     include("crud-cliente.php");

	$nome = $_POST["nome"];
	$email = $_POST["email"];

	if(insert_Cliente($conexao,$nome,$email)) 
     {?>
          <h2>
               <p class="text-success"> DADOS DO CLIENTE - GRAVADO :-)</p>
          </h2>

          <br>
               <table class="table" style="text-align:left">
               <tr> 
                    <td>Nome Completo do Cliente:<?= $nome;?></td>
               </tr> 
               <tr> 
                    <td>E-mail do Cliente:<?= $email;?></td>
               </tr> 
	<?php }
     else {
               $msg = mysqli_error($conexao);
               echo $msg;?>
               <h2>
                    <p class="text-danger">DADOS DO CLIENTE - NÃO GRAVADO :-( </p>
               </h2>
    <?php
		}
    ?>

<?php include("rodape.php");?>
