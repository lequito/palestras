<?php

require_once 'config.php';

$mat = $_POST["matricula"];
$nm  = $_POST["nome"];
$cpf = $_POST["cpf"];
$crs = $_POST["curso"];
$pal = $_POST["palestra"];

$sql = "INSERT INTO aluno_palestra (matricula, aluno, cpf, curso, palestra) VALUES ('$mat', '$nm', '$cpf', '$crs', '$pal')";

$result = mysqli_query($conn, $sql);

if($result == true){
    echo "<script type=\"text/javascript\">
	alert(\"Cadastrado realizado com sucesso\");
	window.location=\"index.php\";
	</script>";	
}else{
	echo "Erro";
}