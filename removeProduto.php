<?php include ("cabecalho.php");?>
<?php include ("conecta.php");?>
<?php include ("bancoProduto.php")?>

<?php
$id = $_POST['id'];
removeProduto($conexao, $id);
header("Location:listaProduto.php");
?>


<?php include ("rodape.php"); ?>