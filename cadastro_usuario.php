<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />

	<title>Cadastro de usuário</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style type="text/css">
        #efeitocss{


  }
      #efeitocss{
        
        -webkit-box-shadow: 10px 10px 18px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: 10px 10px 18px 0px rgba(0,0,0,0.75);
        box-shadow: 10px 10px 18px 0px rgba(0,0,0,0.75);
      }

      #botao{
        background-color: #FF1168;
        color: #ffffff;
        font-weight: bold;
      }


  </style>
</head>
<body>

<div class="container" id="efeitocss" style="width:400px;border-radius: 15px;border: 2px solid #f3f3f3; margin-top: 40px;">
<div style="padding:10px;">
<form action="_inserir_usuario.php" method="post">
  <h4>Cadastro de usuário</h4>
  <div class="form-group">
    <label>Nome do usuário</label>
    <input type="text" name="nome_usuario" class="form-control" autocomplete="off" required placeholder="Nome Completo" />
  </div>

  <div class="form-group">
    <label>E-mail</label>
    <input type="email" name="mail_usuario" class="form-control" autocomplete="off" required placeholder="Seu E-mail" />
  </div>

  <div class="form-group">
    <label>Senha</label>
    <input type="password" id="txts" name="senha_usuario" class="form-control" autocomplete="off" required placeholder="Digite uma senha de cadastro">
  </div>

 <div class="form-group">
    <label>Repita a Senha</label>
    <input type="password" name="senha_usuario2" class="form-control" autocomplete="off" required placeholder="Repita sua senha" oninput="validaSenha(this)" >
    <small>Precisa ser igual a senha digitada acima.</small>
 </div>

 <div class="form-group">
    <label>Nível de Acesso</label>
    <select name="nivel_us" class="form-control">
        <option value="1">Administrador</option>    
        <option value="2">Funcionário</option>
        <option value="3">Conferente</option>
     

    </select>

 </div>

<div style="text-align:center;">
<button type="submit" id="botao" class="btn btn-sm btn-primary" style="margin-top:10px;">Cadastrar</button>
</div>
</form>

</div>


</div>






<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<script type="text/javascript">
function validaSenha (input){
  if (input.value != document.getElementById('txts').value){
    input.setCustomValidity('Repita a senha corretamente');
  } else {
    input.setCustomValidity('');
  }
}
</script>
</body>
</html>