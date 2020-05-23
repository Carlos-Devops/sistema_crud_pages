<?php  
	session_start(); // Iniciando a SESSÃO.

	// Se não existe a SESSÃO "UsuarioLogado" significa que o individúo não passou pela verificação ou seja não pode acessar a página, então mandamos ele de volta para ao formulário de autenticação e destruirmos a SESSÃO. 
	if (!isset($_SESSION['UsuarioLogado'])){
		header("Location.login-session.php");
		session_destroy();
	}

	include("cabecalho.php");
	include("rodape.php");
?>