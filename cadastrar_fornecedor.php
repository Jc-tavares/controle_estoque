<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastrar Fornecedor</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<style type="text/css">
	

	#botao{
				background-color: #FF1168;
				color: #ffffff;
				font-weight: bold;
			}
</style>

</head>
<body>

<div class="container" style="margin-top:40px;width: 500px;">
	<h4 style="text-align:center;">Cadastro de Fornecedor</h4>
	<form action="_cadastrar_fornecedor.php" method="post">
		<div class="form-group">
			<input type="text" name="fornecedor" class="form-control" autocomplete="off" placeholder="Digite o nome do fornecedor">
			


		</div>
		<div style="text-align:center">
		<button type="submit" id="botao" class="btn btn-sm" style="margin-top:10px;">Cadastrar</button>
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