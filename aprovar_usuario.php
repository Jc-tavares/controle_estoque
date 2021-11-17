<!DOCTYPE html>
<html>
<head>
	<title>Aprovar usuários</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/b3a6bc6973.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container" style="margin-top: 40px;width: 1200px; border: 2px solid #f3f3f3;border-radius: 15px;">
		<h3>Lista de usuários</h3>
		<br>
		<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome do usuário</th>
      <th scope="col">E-mail</th>
      <th scope="col">Nível de usuário</th>
      <th scope="col">Status</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  
    
    	<?php 

    		include 'conexao.php';
    		$sql = "SELECT * FROM `usuarios` WHERE status = 'Pendente'";
    		$buscar = mysqli_query($conexao, $sql);

    		while ($array = mysqli_fetch_array($buscar)) {

    			$id_usuario = $array['id_usuario'];
    			$nome_usuario = $array['nome_usuario'];
    			$mail_user = $array['mail_usuario'];
    			$nvl_user = $array['nivel_usuario'];
    			$stat = $array['status'];

    		

    	?>

    <tr>
    	<td><?php echo $nome_usuario ?></td>
    	<td><?php echo $mail_user ?></td>
    	<td style="text-align:center;"><?php echo $nvl_user ?></td>
    	<td><?php echo $stat ?></td>
    	<td>
        
    		<a class="btn btn-success btn-sm" style="color:#fff" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?>&nivel=1"><i class="far fa-thumbs-up"></i>&nbsp;Administrador</a>
      
        <a class="btn btn-warning btn-sm" style="color:#fff" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?>&nivel=2"><i class="far fa-thumbs-up"></i>&nbsp;Funcionário</a>
         
     
        <a class="btn btn-dark btn-sm" style="color:#fff" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?>&nivel=3"><i class="far fa-thumbs-up"></i>&nbsp;Conferente</a>
       
        
    		<a class="btn btn-danger btn-sm" style="color:#fff" href="_deletar_usuario.php?id=<?php echo $id_usuario ?>"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>
    	</td>


    <?php } ?>
      
    </tr>

  
</table>
	
	

	</div>
			<div style="text-align: center;margin-top: 10px;">
		<a href="menu.php" role="button" class="btn btn-sm btn-primary" style="background-color: #FF1168; color: #ffffff; font-weight: bold; text-align: center;">Voltar</a>

	</div>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>