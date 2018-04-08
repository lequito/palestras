<!DOCTYPE html>
<html lang="PT-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Palestras</title>
    <link rel="stylesheet" href="assests/css/bootstrap.min.css">
</head>

<body>
<form class="form-horizontal" action="palestraController.php" method="post">
<fieldset>

<!-- Form Name -->
<center><legend>Matricular-se em palestras</legend></center>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="matricula"></label>  
  <div class="col-md-4">
  <input id="matricula" name="matricula" type="number" placeholder="Informe sua Matricula" class="form-control input-md" required="">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nome"></label>  
  <div class="col-md-4">
  <input id="nome" name="nome" type="text" placeholder="Digite seu Nome" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cpf"></label>  
  <div class="col-md-4">
  <input id="cpf" name="cpf" type="number" placeholder="Digite se CPF" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="curso"></label>
  <div class="col-md-4">
    <select id="curso" name="curso" class="form-control">
      <option value="">Selecione seu curso</option>
      <?php
           require_once 'config.php';
           $selecionar = "SELECT * FROM curso";
           $resultado = mysqli_query($conn, $selecionar);
           while ($dados = mysqli_fetch_array($resultado)){
           $id = $dados['idcurso'];
           $nome = $dados['nome'];
           echo"<option value='$id'>$nome</option>";
          }
       ?>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="palestra"></label>
  <div class="col-md-4">
    <select id="palestra" name="palestra" class="form-control">
      <option value="">Escolha uma palestra</option>
      <?php
           require_once 'config.php';
           $selecionar = "SELECT * FROM palestras";
           $resultado = mysqli_query($conn, $selecionar);
           while ($dados = mysqli_fetch_array($resultado)){
           $id = $dados['id_palestra'];
           $nome = $dados['nome_palestra'];
           echo"<option value='$id'>$nome</option>";
          }
       ?>
    </select>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="btn_matricula"></label>
  <div class="col-md-4">
    <button id="btn_matricula" name="btn_matricula" class="btn btn-info">Matricule-se</button>
  </div>
</div>

</fieldset>
</form>

<script src="assests/js/bootstrap.min.js"></script>
<script src="assests/js/jquery.min.js"></script>
</body>
</html>
