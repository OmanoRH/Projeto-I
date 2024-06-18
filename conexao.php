
<!-- Declaração das Variaveis -->
<?php 

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "boleiros_receitas";

?>

<!-- Conexão -->
<?php 

    try{
        $pdo = new PDO("mysql:host=$servidor; dbname=$banco", "$usuario", "$senha"); 
    } catch(PDOException $e) {
        die($e -> getMessage());
    }
    

?>