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
		<?php foreach($resultado as $res){
			echo "<tr><td>".$res['nome']."<br/></td><td>".$res['preco']."<br/></td>";
			echo "<td><a href='remove-produto.php?id=".$res['id']."'class='text-danger'>remover</a></td></tr>";
		} ?>
	</table>

<?php include("rodape.php"); ?>