<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Menu Jean Tattoo!</title>
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

<?php

  session_start();

  $usuario = $_SESSION['usuario'];

  if(!isset($_SESSION['usuario'])){

    header ("Location: index.php");

  }

include 'conexao.php';

$sql = "SELECT `nivel_usuario` FROM `usuarios` WHERE mail_usuario = '$usuario'";
$buscar = mysqli_query($conexao,$sql);
$array = mysqli_fetch_array($buscar);
echo $nivel = $array['nivel_usuario'];



?>


<div class="container" style="margin-top:100px">
        <div class="row">
          <?php 
          if (($nivel == 1)||($nivel == 2)){

          ?>
               <div class="col-sm-6">
                      <div class="card">
                            <div class="card-body">
                                 <h5 class="card-title">Adicionar Produto</h5>
                                 <p class="card-text">Opção para adicionar produtos em nosso estoque.</p>
                                 <a href="cadastrar_produto.php" class="btn btn-primary" id="botao">Cadastrar Produto</a>
                            </div>
                      </div>
               </div>
             <?php } ?>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                             <h5 class="card-title">Listar Produtos</h5>
                             <p class="card-text">Visualizar, editar e excluir os produtos.</p>
                             <a href="listar_produtos.php" class="btn btn-primary" id="botao">Produtos</a>
                        </div>
                    </div>
                </div>
        </div>

        <div class="row" style="margin-top:20px">
          <?php 
          if (($nivel == 1)||($nivel == 2)){

          ?>
                  <div class="col-sm-6">
                      <div class="card">
                          <div class="card-body">
                              <h5 class="card-title">Adicionar Categoria</h5>
                              <p class="card-text">Opção para adicionar categoria de produtos.</p>
                              <a href="cadastrar_categoria.php" class="btn btn-primary" id="botao">Cadastrar Categoria</a>
                          </div>
                     </div>
                  </div>
                  <?php } ?>
                  <div class="col-sm-6">
                      <div class="card">
                          <div class="card-body">
                              <h5 class="card-title">Listar Categoria</h5>
                              <p class="card-text">Visualizar, editar e excluir categoria.</p>
                              <a href="listar_categoria.php" class="btn btn-primary" id="botao">Categoria</a>
                          </div>
                      </div>
                  </div>
        </div>


         <div class="row" style="margin-top:20px">
          <?php 
          if (($nivel == 1)||($nivel == 2)){

          ?>
                  <div class="col-sm-6">
                      <div class="card">
                          <div class="card-body">
                              <h5 class="card-title">Adicionar Fornecedor</h5>
                              <p class="card-text">Opção para adicionar fornecedor.</p>
                              <a href="cadastrar_fornecedor.php" class="btn btn-primary" id="botao">Cadastrar Fornecedor</a>
                          </div>
                     </div>
                  </div>
                  <?php } ?>
                  <div class="col-sm-6">
                      <div class="card">
                          <div class="card-body">
                              <h5 class="card-title">Listar Fornecedores</h5>
                              <p class="card-text">Visualizar, editar e excluir fornecedores.</p>
                              <a href="listar_fornecedor.php" class="btn btn-primary" id="botao">Fornecedor</a>
                          </div>
                      </div>
                  </div>
        </div>

        <div class="row" style="margin-top:20px">
          <?php 
          if (($nivel == 1)||($nivel == 2)){

          ?>
                  <div class="col-sm-6">
                      <div class="card">
                          <div class="card-body">
                              <h5 class="card-title">Aprovar usuários</h5>
                              <p class="card-text">Opção para aprovar usuários.</p>
                              <a href="aprovar_usuario.php" class="btn btn-primary" id="botao">Aprovar Usuários</a>
                          </div>
                     </div>
                  </div>
                   <?php } ?>
                  <div class="col-sm-6">
                      <div class="card">
                          <div class="card-body">
                              <h5 class="card-title">Listar Usuários</h5>
                              <p class="card-text">Visualizar, editar e excluir usuários cadastrados.</p>
                              <a href="listar_usuarios.php" class="btn btn-primary" id="botao">Listar usuários</a>
                          </div>
                      </div>
                  </div>
        </div>


</div>



<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>