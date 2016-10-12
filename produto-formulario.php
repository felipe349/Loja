<?php include("cabecalho.php"); ?>
	<h1>Formulario de produto</h1>

	<form action="adiciona-produto.php" method="post">
		<table class="table table-bordered">
			<tr>
				<td>Nome:</td> 
				<td><input class="form-control" type="text" name="nome"></td>
			</tr>

			<tr>
				<td>Preco:</td>
				<td><input class="form-control" type="number" name="preco"></td>
			</tr>

			<tr>
				<td>Descrição:</td>
				<td><textarea class="form-control" name="descricao"></textarea></td>
			</tr>

		</table>

		<button class="btn btn-primary btn-block" type="submit">Cadastrar</button>
	</form>
<?php include("rodape.php"); ?>