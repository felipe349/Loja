<?php include("cabecalho.php"); ?>
<?php
	$nome = $_POST['nome'];
	$preco = $_POST['preco'];
	$descricao = $_POST['descricao'];

	$db = new PDO("mysql:host=localhost;dbname=loja","root","");
	$st = $db->prepare("INSERT INTO PRODUTOS (nome, preco, descricao) VALUES (?,?,?)");
	$st->bindParam(1,$nome);
	$st->bindParam(2,$preco);
	$st->bindParam(3,$descricao);
	$st->execute();
?>	

<p class="alert-success">Produto <?php echo $nome; ?>, <?php echo $preco; ?> com sucesso!</p>
<?php include("rodape.php"); ?>