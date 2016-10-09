<?php include("cabecalho.php"); ?>

<?php  
	$db = new PDO("mysql:host=localhost;dbname=loja","root","");
	$st = $db->prepare("SELECT * FROM PRODUTOS");
	$st->execute();
	$resultado = $st->fetchAll();
	foreach($resultado as $res){
		echo $res['nome']."<br/>";
	}
?>

<?php include("rodape.php"); ?>