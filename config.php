
<?php
//neste arquivo e criada todas as constantes do banco de dado.
define("SERVER", "");
define("USER", "");
define("PASS", "");
define("DATABASE", "");

$conn = mysqli_connect(SERVER, USER, PASS, DATABASE) or die("erro  de conexao bd". mysqli_error($conn)) ;

?>
