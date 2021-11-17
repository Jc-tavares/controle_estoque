<!DOCTYPE html>
<html>
<head>
	<title>Listagem Categoria</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/b3a6bc6973.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container" style="margin-top: 40px;width: 500px;">
		<h3>Lista de Categorias</h3>
		<br>
		<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome da Categoria</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  
    
    	<?php 

    		include 'conexao.php';
    		$sql = "SELECT * FROM `categoria`";
    		$buscar = mysqli_query($conexao, $sql);

    		while ($array = mysqli_fetch_array($buscar)) {

    			$id_categoria = $array['id_categoria'];
    			$nome_da_categoria = $array['nome_categoria'];

    		

    	?>

    <tr>
    	<td><?php echo $nome_da_categoria ?></td>
    	<td>
    		<a class="btn btn-warning btn-sm" style="color:#fff" href="editar_categoria.php?id=<?php echo $id_categoria ?>"><i class="far fa-edit"></i>&nbsp;Editar</a>
    		<a class="btn btn-danger btn-sm" style="color:#fff" href="_deletar_categoria.php?id=<?php echo $id_categoria ?>"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>
    	</td>


    <?php } ?>
      
    </tr>

  
</table>
	
	
	<div style="text-align: center;">
		<a href="cadastrar_categoria.php" role="button" class="btn btn-sm btn-primary" style="background-color: #FF1168; color: #ffffff; font-weight: bold; text-align: center;">Cadastrar categoria</a>
	</div>
	</div>
			<div style="text-align: center;margin-top: 10px;">
		<a href="menu.php" role="button" class="btn btn-sm btn-primary" style="background-color: #FF1168; color: #ffffff; font-weight: bold; text-align: center;">Voltar</a>

	</div>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>