<?php include("cabecalho.php");
	$db = new PDO("mysql:host=localhost;dbname=loja","root","");
	$st = $db->prepare("DELETE FROM produtos WHERE id=?");
	$st->bindParam(1, $_POST['id']);
	$st->execute();
	header('Location:produto-lista.php?removido=true');
?>

<?php include("rodape.php"); ?>