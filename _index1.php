<?php 
include 'conexao.php';
include 'script/password.php';


$usuario = $_POST['usuario'];
$senha_usuario = $_POST['senha'];

$sql = "SELECT `mail_usuario`,`senha_usuario` FROM `usuarios` WHERE mail_usuario = '$usuario' and status='Ativo'";
$buscar = mysqli_query($conexao,$sql);


$total = mysqli_num_rows($buscar);


while ($array = mysqli_fetch_array($buscar)) {
	$senha = $array['senha_usuario'];

	$senhadecodificada = sha1($senha_usuario);

	if ($total > 0) {
		if ($senhadecodificada == $senha){
			session_start();
			$_SESSION['usuario'] = $usuario;
			header("Location: menu.php");
	} else{
			header("Location: erro.php");
	}
	

	} else{
			header("Location: erro.php");
	}



	}
	if ($total == 0) {
		header("Location: erro.php");
}

?>