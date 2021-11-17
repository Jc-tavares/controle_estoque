<?php
include 'conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM `usuarios` WHERE id_usuario = $id";
$registra = mysqli_query($conexao,$sql);

header("Location: aprovar_usuario.php"); //redireciona novamente para pag de aprovacao
?>