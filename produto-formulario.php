<?php include("cabecalho.php"); ?>
	<h1>Formulario de produto</h1>

	<form action="adiciona-produto.php">
		<table class="table table-bordered">
			<tr>
				<td>Nome:</td> 
				<td><input class="form-control" type="text" name="nome"></td>
			</tr>

			<tr>
				<td>Preco:</td>
				<td><input class="form-control" type="number" name="preco"></td>
			</tr>
		</table>

		<button class="btn btn-primary btn-block" type="submit">Cadastrar</button>
	</form>
<?php include("rodape.php"); ?>