<?php  
	/* Um COOKIE um arquivo criado pelo servidor na máquina do usuário para armazenar algumas informacões, exemplo:
		se acesso um site de roupas e realizo uma pesquisa de uma blusa masculina especifíca, depois que eu saio do site e em outra oportunidade entro novamente o mesmo ficará me exibindo barners de blusas masculinas.
	*/

	// Criando um cookie que será valído por 1 hora:
	setcookie('usuario', 'Carlos Eduardo', time()+(2 *1800));

	function buscaUsuario($conexao,$email,$senha){


		$senhaMd5 = md5($senha);

		$query = "SELECT *
					FROM USUARIO
				  WHERE EMAIL = '{$email}'
				     AND SENHA = '{$senhaMd5}'";

		$resultado = mysqli_query($conexao,$query);

		$usuario = mysqli_fetch_assoc($resultado);

		return $usuario;
	}

?>