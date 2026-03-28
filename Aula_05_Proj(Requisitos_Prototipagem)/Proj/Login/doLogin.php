<?php
	// 1) Recebendo os valores do form
	$login = $_POST['login'];
	$senha = $_POST['senha'];

	//'Simulando' o DB 
	if($login == "admin" && $senha == "admin")
	{
		//O bonito ai entra
		header("Location: ../Cadastro/cadastro.php");
	}
	else
	{
		//Ñão entra
		echo "<script> 
				 alert('Usuário Inexistente!');
				 history.back();
		      </script>";
	}
?>