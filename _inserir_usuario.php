<?php 
include 'conexao.php';
include 'script/password.php';

$nome_user = $_POST['nome_usuario'];
$mail = $_POST['mail_usuario'];
$senha_user = $_POST['senha_usuario'];
$nivel_acesso = $_POST['nivel_us'];
$status = 'Ativo';

$sql = "INSERT INTO usuarios (nome_usuario,mail_usuario,senha_usuario,nivel_usuario,status) values ('$nome_user','$mail',sha1('$senha_user'),$nivel_acesso,'$status')";

$sql = "INSERT INTO `usuarios`(`nome_usuario`, `mail_usuario`, `senha_usuario`, `nivel_usuario`, `status`) VALUES ('$nome_user','$mail',sha1('$senha_user'),$nivel_acesso,'$status')";

$inserir = mysqli_query($conexao,$sql);
?>



<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


<div class="container" style="width: 300px">
	<center><h4 style="text-align:center">Novo usuário inserido com Sucesso!</h4></center>
	<div style="text-align:center">
		<a href="cadastro_usuario.php" role="button" class="btn btn-sm btn-primary" style="background-color: #FF1168; color: #ffffff; font-weight: bold; text-align: center;">Voltar</a>
	</div>
</div>