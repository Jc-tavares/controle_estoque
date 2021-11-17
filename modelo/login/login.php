<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
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
		<h4>Entre ou cadastre-se!</h4>
		<form action="_logar.php" method="post">
			<div class="form-group" style="margin-top: 20px">
			  <label>Login</label>
			  <input type="text" class="form-control" name="login" placeholder="Insira o login" autocomplete="off" required>
			</div>

			<div class="form-group" style="margin-top: 20px">
			  <label>Senha</label>
			  <input type="text" class="form-control" name="senha" placeholder="Insira o login" autocomplete="off" required>
			</div>
			
			
		
		
			<div style="text-align: center; margin-top: 10px;">
				<button type="submit" id="botao" class="btn btn-sm">Entrar</button>
			</div>
		</form>
	</div>




<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>