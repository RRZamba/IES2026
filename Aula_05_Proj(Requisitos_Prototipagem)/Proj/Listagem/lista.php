<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Listinha</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>

<div class="container mt-4">

	<!-- Substituindo jumbotron -->
	<div class="p-4 mb-4 bg-light rounded">
		<h1>Listagem de Produtos</h1>
		<p>Produtos fofos!</p>
	</div>

	<!-- Navegação -->
	<ul class="nav nav-tabs mb-3">
		<li class="nav-item">
			<a class="nav-link" href="../Cadastro/cadastro.php">
				Cadastrar Produto
			</a> 
		</li>
		<li class="nav-item">
			<a class="nav-link active" href="#">
				Lista Produtos
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">
				Usuários
			</a>
		</li>
	</ul>

	<!-- Tabela -->
	<table class="table table-striped">
		<tr>
			<th>Nome</th>
			<th>Descrição</th>
			<th>Área</th>
			<th>Preço</th>
			<th>Moeda</th>
			<th>País</th>
			<th>Editar</th>
			<th>Visualizar</th>
		</tr>

		<tr>
			<td>Mouse Gamer</td>
			<td>RGB 7200 DPI</td>
			<td>Periféricos</td>
			<td>150</td>
			<td>R$</td>
			<td>Brasil</td>
			<td><button class="btn btn-warning btn-sm">Editar</button></td>
			<td><button class="btn btn-info btn-sm">Visualizar</button></td>
		</tr>

		<tr>
			<td>Teclado Mecânico</td>
			<td>Switch Blue</td>
			<td>Periféricos</td>
			<td>350</td>
			<td>R$</td>
			<td>China</td>
			<td><button class="btn btn-warning btn-sm">Editar</button></td>
			<td><button class="btn btn-info btn-sm">Visualizar</button></td>
		</tr>

		<tr>
			<td>Monitor 24"</td>
			<td>Full HD</td>
			<td>Hardware</td>
			<td>900</td>
			<td>R$</td>
			<td>Brasil</td>
			<td><button class="btn btn-warning btn-sm">Editar</button></td>
			<td><button class="btn btn-info btn-sm">Visualizar</button></td>
		</tr>

	</table>

	<!-- Paginação fake -->
	<div class="row justify-content-center">
		<nav>
			<ul class="pagination">
				<li class="page-item">
					<a class="page-link" href="#">&laquo;</a>
				</li>

				<li class="page-item active">
					<a class="page-link" href="#">1</a>
				</li>

				<li class="page-item">
					<a class="page-link" href="#">2</a>
				</li>

				<li class="page-item">
					<a class="page-link" href="#">3</a>
				</li>

				<li class="page-item">
					<a class="page-link" href="#">&raquo;</a>
				</li>
			</ul>
		</nav>
	</div>

</div>

</body>
</html>