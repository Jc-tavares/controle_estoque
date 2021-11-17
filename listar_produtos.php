<!DOCTYPE html>
<html>
<head>
	<title>Listagem Produtos</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/b3a6bc6973.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container" style="margin-top: 40px;">
		<h3>Lista de Produtos</h3>
		<br>
		<table class="table">
  <thead>
    <tr>
      <th scope="col">Número do Produto</th>
      <th scope="col">Nome do Produto</th>
      <th scope="col">Categoria</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Fornecedor</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  
    
    	<?php 

    		include 'conexao.php';
    		$sql = "SELECT * FROM `estoque`";
    		$buscar = mysqli_query($conexao, $sql);

    		while ($array = mysqli_fetch_array($buscar)) {

    			$id_estoque = $array['id_estoque'];
    			$nroproduto = $array['nroproduto'];
    			$nomeproduto = $array['nomeproduto'];
    			$categoria = $array['categoria'];
    			$quantidade = $array['quantidade'];
    			$fornecedor = $array['fornecedor'];
    		

    	?>

    <tr>
    	<td><?php echo $nroproduto ?></td>
    	<td><?php echo $nomeproduto ?></td>
    	<td><?php echo $categoria ?></td>
    	<td><?php echo $quantidade ?></td>
    	<td><?php echo $fornecedor ?></td>
    	<td>
    		<a class="btn btn-warning btn-sm" style="color:#fff" href="editar_produto.php?id=<?php echo $id_estoque ?>"><i class="far fa-edit"></i>&nbsp;Editar</a>
    		<a class="btn btn-danger btn-sm" style="color:#fff" href="_deletar_produto.php?id=<?php echo $id_estoque ?>"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>
    	</td>


    <?php } ?>
      
    </tr>

  
</table>
	
	
	<div style="text-align: center;">
		<a href="cadastrar_produto.php" role="button" class="btn btn-sm btn-primary" style="background-color: #FF1168; color: #ffffff; font-weight: bold; text-align: center;">Cadastrar produto</a>
	</div>
	</div>
			<div style="text-align: center;margin-top: 10px;">
		<a href="menu.php" role="button" class="btn btn-sm btn-primary" style="background-color: #FF1168; color: #ffffff; font-weight: bold; text-align: center;">Voltar</a>

	</div>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>