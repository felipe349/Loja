<?php include("cabecalho.php"); ?>

<?php  
	$db = new PDO("mysql:host=localhost;dbname=loja","root","");
	$st = $db->prepare("SELECT * FROM PRODUTOS");
	$st->execute();
	$resultado = $st->fetchAll();
?> 
	<table class="table table-striped table-bordered">
		<th>Produto</th>
		<th>Preço</th>
		<?php foreach($resultado as $res){
			echo "<tr><td>".$res['nome']."<br/></td><td>".$res['preco']."<br/></td></tr>";
		} ?>
	</table>

<?php include("rodape.php"); ?>