<?php include("cabecalho.php"); ?>
<?php
	$nome = $_GET['nome'];
	$preco = $_GET['preco'];
	$db = new PDO("mysql:host=localhost;dbname=loja","root","");
	$st = $db->prepare("INSERT INTO PRODUTOS (nome, preco) VALUES (?,?)");
	$st->bindParam(1,$nome);
	$st->bindParam(2,$preco);
	$st->execute();
?>	

<p class="alert-success">Produto <?php echo $nome; ?>, <?php echo $preco; ?> com sucesso!</p>
<?php include("rodape.php"); ?>