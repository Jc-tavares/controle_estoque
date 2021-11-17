<?php
	
	include 'conexao.php';

	$nroproduto = $_POST['nroproduto'];
	$nomeproduto = $_POST['nomeproduto'];
	$categoria = $_POST['categoria'];
	$quantidade = $_POST['quantidade'];
	$fornecedor = $_POST['fornecedor'];
	//$texto = "\n";
	/*
	echo "$nroproduto <br/>";
	echo nl2br($texto);
	echo $nomeproduto;
	echo nl2br($texto);
	echo $categoria;
	echo nl2br($texto);
	echo $quantidade;
	echo nl2br($texto);
	echo $fornecedor;
	
	*/

	$sql = "INSERT INTO `estoque`(`nroproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) VALUES ($nroproduto,'$nomeproduto','$categoria',$quantidade,'$fornecedor')";
	
	$inserir = mysqli_query($conexao, $sql);
?>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


<div class="container" style="width: 300px">
	<center><h4>Produto Adicionado com Sucesso!</h4></center>
	<div style="text-align:center">
		<a href="menu.php" role="button" class="btn btn-sm btn-primary" style="background-color: #FF1168; color: #ffffff; font-weight: bold; text-align: center;">Voltar</a>
	</div>>
</div>