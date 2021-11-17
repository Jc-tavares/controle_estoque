<?php

include 'conexao.php';
$id = $_GET['id'];


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>BD Jean Tattoo Dev</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

	<style type="text/css">
			
			#tamanhoContainer{
				width: 500px;

			}

			#botao{
				background-color: #FF1168;
				color: #ffffff;
				font-weight: bold;
			}


	</style>

</head>
<body>
	<div class="container" id="tamanhoContainer" style="margin-top: 40px">
		<h4>Editar Fornecedor</h4>
		<form action="_atualizar_fornecedor.php" method="post">
			<?php

			$sql = "SELECT * FROM `fornecedor` WHERE id_fornecedor = $id";
			$buscar = mysqli_query($conexao,$sql);
			while ($array = mysqli_fetch_array($buscar)) {
				
				$id_fornecedor = $array['id_fornecedor'];
    			$nome_fornecedor = $array['nome_fornecedor'];
    			




			?>
			<div class="form-group" style="margin-top: 20px">
			  
			  <input type="number" class="form-control" name="id_fornecedor" value="<?php echo $id_fornecedor ?>" style="display: none;">
			</div>
			<div class="form-group">
			  <label>Nome Fornecedor</label>
			  <input type="text" class="form-control" name="nome_fornecedor">
			</div>
			
			
			<div style="text-align: center; margin-top: 10px;">
				<button type="submit" id="botao" class="btn btn-sm">Alterar</button>
			</div>
		<?php } ?>
		</form>
	</div>
	<div style="text-align: center;margin-top: 10px;">
		<a href="listar_fornecedor.php" role="button" class="btn btn-sm btn-primary" style="background-color: #FF1168; color: #ffffff; font-weight: bold; text-align: center;">Listar Fornecedor</a>

	</div>




<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>