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
		<h4>Formulário de Cadastro</h4>
		<form action="_inserir_produto.php" method="post">
			<div class="form-group" style="margin-top: 20px">
			  <label>Nrº Produto</label>
			  <input type="number" class="form-control" name="nroproduto" placeholder="Insira o número do produto" autocomplete="off" required>
			</div>
			<div class="form-group">
			  <label>Nome Produto</label>
			  <input type="text" class="form-control" name="nomeproduto" placeholder="Insira o Nome do produto" autocomplete="off" required>
			</div>
			<div class="form-group">
				<label>Categoria</label>
				<select class="form-control" name="categoria">
					<?php 
						include 'conexao.php';
						$sql = "SELECT * FROM `categoria` order by nome_categoria ASC";
						$buscar = mysqli_query($conexao,$sql);

						while ($array = mysqli_fetch_array($buscar)){

							$id_categoria = $array['id_categoria'];
							$recebe_categoria = $array['nome_categoria'];



						?>

				  		<option><?php echo $recebe_categoria ?></option>


				  		<?php } ?>
				</select>
			</div>	
			<div class="form-group">
			  <label>Quantidade do Produto</label>
			  <input type="number" class="form-control" name="quantidade" placeholder="Insira a quantidade do produto" autocomplete="off" required>
			</div>
			<div class="form-group">
				<label>Fornecedor</label>
				<select class="form-control" name="fornecedor">
					<?php 
						include 'conexao.php';
						$sql_fornecedor = "SELECT * FROM `fornecedor` order by nome_fornecedor ASC";
						$buscar_forn = mysqli_query($conexao,$sql_fornecedor);

						while ($array2 = mysqli_fetch_array($buscar_forn)){

							$id_fornecedor = $array2['id_fornecedor'];
							$recebe_fornecedor = $array2['nome_fornecedor'];



						?>
				  <option selected><?php echo $recebe_fornecedor ?></option>
				  		<?php } ?>
				 
				</select>
			</div>
			<div style="text-align: center; margin-top: 10px;">
				<button type="submit" id="botao" class="btn btn-primary">Cadastrar</button>
			</div>
			<div style="text-align: center;margin-top: 10px;">
		<a href="menu.php" role="button" class="btn btn-sm btn-primary" style="background-color: #FF1168; color: #ffffff; font-weight: bold; text-align: center;">Voltar</a>

	</div>
		</form>
	</div>
	




<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>