<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<title>Tela de Login</title>
	<style type="text/css">
		
	#efeitocss{
-webkit-box-shadow: 10px 10px 18px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 10px 10px 18px 0px rgba(0,0,0,0.75);
box-shadow: 10px 10px 18px 0px rgba(0,0,0,0.75);

	}


	</style>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<div class="container" id="efeitocss" style="width:350px;margin-top: 100px;border-radius: 15px;border: 2px solid #f3f3f3;">
<div style="padding: 10px;">
<div style="text-align:center;">
	<img src="img/cadeado.png" style="width:125px;height: 125px;">
</div>
<form action="_index1.php" method="post">
	<h4 style="text-align:center;">Login</h4>
	<div class="form-group">
		<label>Login</label>
		<input type="text" name="usuario" class="form-control" placeholder="#usuário" autocomplete="off" required>
	</div>


	<div class="form-group">
		<label>Senha</label>
		<input type="password" name="senha" class="form-control" placeholder="#senha" autocomplete="off" required>
	</div>

	<div style="text-align:center;margin-top: 10px;margin-bottom: 10px;">
		<button type="submit" class="btn btn-sm btn-primary" style="background-color: #FF1168; color: #ffffff; font-weight: bold;">Entrar</button>
	</div>


</form>


</div>

</div>
<div style="margin-top:10px;">
<center>
	<small>Você não possui cadastro? clique<a href="cadastro_usuario_externo.php">aqui</a></small>
</center>
</div>



<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>