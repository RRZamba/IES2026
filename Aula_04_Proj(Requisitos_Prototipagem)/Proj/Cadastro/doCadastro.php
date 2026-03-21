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
		//Testando!!!!!!!!!!!
		echo "Nome: $nome";
		echo "<br>";
		echo "Descrição: $descricao";
		echo "<br>";
		echo "Área: $area";
		echo "<br>";
		echo "Preço: $preco";
		echo "<br>";
		echo "Moeda: $moeda";
		echo "<br>";
		echo "País $pais";
	}

?>