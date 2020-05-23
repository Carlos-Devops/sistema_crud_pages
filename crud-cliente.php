<?php

	function insert_Cliente($conexao,$nome,$email){
		$query = "INSERT INTO CLIENTE (NOME,EMAIL)
			         VALUES ('{$nome}','{$email}')";
		return mysqli_query($conexao,$query);
	}

	function select_Cliente($conexao){
        $listaCliente = array();
        $query = "SELECT * FROM CLIENTE ORDER BY NOME";
        $resultado = mysqli_query($conexao,$query);
       
        while ($cliente = mysqli_fetch_assoc($resultado))
              {
                    array_push($listaCliente,$cliente);
              }
        return $listaCliente;
    }

    function delete_Cliente($conexao,$codigo){
    	$query = "DELETE FROM CLIENTE WHERE CODIGO = {$CODIGO}";
    	return mysqli_query($conexao,$query);
    }

    function selectUpdate_Cliente($conexao,$codigo){
    	$query = "SELECT * FROM CLIENTE WHERE CODIGO ={$codigo}";
    	$resultado = mysqli_query($conexao,$query);
    	return mysqli_fetch_assoc($resultado);
    }

    function update_Cliente($conexao,$codigo,$nome,$email){
    	$query = "UPDATE CLIENTE
    	            SET NOME = '{$nome}'
    	                email = '{$email}'";
    	return mysqli_query($conexao,$query);
    }
?>