<?php 
include 'conexao.php';
$forn = $_POST['fornecedor'];

$sql = "INSERT INTO `fornecedor`(`nome_fornecedor`) VALUES ('$forn')";
$inserir = mysqli_query($conexao,$sql);


?>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


<div class="container" style="width: 300px">
	<center><h4 style="text-align:center">Fornecedor Adicionado com Sucesso!</h4></center>
	<div style="text-align:center">
		<a href="index.php" role="button" class="btn btn-sm btn-primary" style="background-color: #FF1168; color: #ffffff; font-weight: bold; text-align: center;">Voltar</a>
	</div>
</div>