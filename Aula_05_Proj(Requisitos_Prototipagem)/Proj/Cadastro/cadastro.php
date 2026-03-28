<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro</title>

	<!-- Bootstrap 5 CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-4">

	<!-- Header moderno substituindo o jumbotron -->
	<div class="p-5 mb-4 bg-light rounded-3 shadow-sm">
		<div class="container-fluid py-3">
			<h1 class="display-5 fw-bold">Listagem de Produtos</h1>
			<p class="col-md-8 fs-5">Produtos fofos!</p>
		</div>
	</div>

	<!-- Navegação -->
	<ul class="nav nav-tabs mb-3">
		<li class="nav-item">
			<a class="nav-link active" href="#">
				Cadastrar Produto
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="../Listagem/lista.php">
				Lista Produtos
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">
				Usuários
			</a>
		</li>
	</ul>

	<!--   Formulário     -->

	<form method="POST" action="doCadastro.php">

		<!-- Nome -->
		<div class="mb-3">
			<label class="form-label">Nome:</label>
			<input type="text" name="nome" class="form-control">
		</div>
		<!-- Nome -->		

		<!-- Descrição -->
		<div class="mb-3">
			<label class="form-label">Descrição:</label>
			<input type="text" name="descricao" class="form-control">
		</div>
		<!-- Descrição -->	

		<!-- Área -->
		<div class="mb-3">
			<label class="form-label">Área:</label>
			<select class="form-select" name="area">
				<option value="1">Eletrodoméstico</option>
				<option value="2">Informática</option>
			</select>
		</div>
		<!-- Área -->

		<!-- Preço -->
		<div class="mb-3">
			<label class="form-label">Preço:</label>
			<input type="text" name="preco" class="form-control">
		</div>
		<!-- Preço -->	

		<!-- Moeda -->
		<div class="mb-3">
			<label class="form-label">Moeda:</label>
			<select class="form-select" name="moeda">
				<option value="R$">R$ - Real</option>
				<option value="U$">U$ - Dólar</option>
			</select>
		</div>
		<!-- Moeda -->


		<!-- País -->
		<div class="mb-3">
			<label class="form-label">País:</label>
			<input type="text" name="pais" class="form-control">
		</div>
		<!-- País -->	

		<!-- Imagem -->
		<div class="mb-3">
			<label class="form-label">Imagem:</label>
			<input type="file" name="foto" class="form-control">
		</div>
		<!-- Imagem -->	

		<!-- Botões   -->
		<div class="d-flex gap-2">
			<button type="submit" class="btn btn-primary">Cadastrar</button>
			<button type="submit" class="btn btn-secondary">Limpar</button>
		</div>
	</form>
</div>

<!-- Bootstrap 5 JS (opcional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>