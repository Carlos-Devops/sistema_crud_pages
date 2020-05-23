<?php  
	// A sessões devem ser iniciadas antes de qualquer código HTML e PHP.

	session_start(); // Iniciando a SESSÃO.

	// Se a SESSÃO "UsuarioLogado" for true significa que ele ainda está logado e não posso deixar ele logar, além disso o die para que ele não possa executar mais nada.
	if (isset($_SESSION['UsuarioLogado'])){
		header("Location: index-session.php");
		die();
	}

	include("conexaoMysql.php");
	include("crud-usuario.php");

	$usuario = buscaUsuario($conexao,$_POST["nome"],$_POST["senha"]);

	if($usuario == null)
		$_SESSION["UsuarioLogado"] = true;
		header("Location: index-session.php");
	{
		
	}
	else{
			echo "<script>alert('Usuário e/ou Senha estão incorreto(s).')"
	    }

?>