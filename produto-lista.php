<?php include("cabecalho.php"); ?>

<?php  
	$db = new PDO("mysql:host=localhost;dbname=loja","root","");
	$st = $db->prepare("SELECT * FROM PRODUTOS");
	$st->execute();
	$resultado = $st->fetchAll();
?> 
<?php if(array_key_exists('removido',$_GET) && $_GET['removido']==true) { ?>
	<p class="alert-success">Produto apagado com sucesso.</p>
<?php } ?>
	<table class="table table-striped table-bordered">
		<th>Produto</th>
		<th>Preço</th>
		<th>Descricao</th>
		<?php foreach($resultado as $res){
			echo "<tr><td>".$res['nome']."<br/></td><td>".$res['preco']."<br/></td>";
			echo "<td>".substr($res['descricao'],0,40)."</td>";
			echo "<td><form action='remove-produto.php' method='post'>
					<input type='hidden' name='id' value='".$res['id']."'>
					<button type='submit' class='btn btn-danger'>remover</button>
					</form>
					</td></tr>";
		} ?>
	</table>

<?php include("rodape.php"); ?>