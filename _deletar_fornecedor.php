<?php 
include 'conexao.php';

$id_fornecedor = $_GET['id'];



$sql = "DELETE FROM `fornecedor` WHERE id_fornecedor = $id_fornecedor";

$deletar = mysqli_query($conexao,$sql);



?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<div class="container" style="width:400px">
<center>
	<h3>Fornecedor excluído com sucesso!</h3>
	<div style="margin-top:10px">
		<a href="menu.php" class="btn btn-sm btn-warning" style="color: #fff">Voltar</a>
	</div>
</center>