
<!-- Declaração das Variaveis -->
<?php 

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "boleiros_receitas";

?>

<!-- Conexão -->
<?php 

    $pdo = new PDO("mysql:host = $servidor; dbname = $banco", "$usuario", "$senha"); 

?>