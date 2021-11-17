<?php
	include 'conexao.php';
	$id_usuario = $_GET['id'];
	$nvl = $_GET['nivel'];


	if ($nvl == 1){

		$update = "UPDATE `usuarios` SET status= 'Ativo',nivel_usuario = 1 WHERE id_usuario = $id_usuario";
		$atualizar = mysqli_query($conexao,$update);
		echo "Administrador APROVADO!";
	}

	if ($nvl == 2){

		$update = "UPDATE `usuarios` SET status= 'Ativo',nivel_usuario = 2 WHERE id_usuario = $id_usuario";
		$atualizar = mysqli_query($conexao,$update);
		echo "Funcionário APROVADO!";
	}

	if ($nvl == 3){

		$update = "UPDATE `usuarios` SET status= 'Ativo',nivel_usuario = 3 WHERE id_usuario = $id_usuario";
		$atualizar = mysqli_query($conexao,$update);
		echo "Conferente APROVADO!";
	}
header("Location: aprovar_usuario.php"); //redireciona novamente para pag de aprovacao
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<div class="container" style="width:400px">
<center>
	
	<div style="margin-top:10px">
		<a href="menu.php" class="btn btn-sm btn-warning" style="color: #fff">Voltar</a>
	</div>
</center>