<?php
	//Recebendo os valores do form
	$nome = $_POST['nome'];
	$descricao = $_POST['descricao'];
	$area = $_POST['area'];
	$preco = $_POST['preco'];
	$moeda = $_POST['moeda'];
	$pais = $_POST['pais'];

	//Validando os campos
	if($nome == "")
	{
		echo "Digite algo! OTÁRIO!!!";
	}
	else
	{
		// 1) Conectando com o DB
		$con = mysqli_connect('localhost','root','','produtinhos');

		// 2) Montando o Insert
		$consulta = "INSERT INTO produto(nome,descricao,area,preco,moeda,pais)
			VALUES('$nome','$descricao','$area',$preco,'$moeda','$pais')";

		// 3) Executando o insert
		mysqli_query($con,$consulta); 















	}

?>