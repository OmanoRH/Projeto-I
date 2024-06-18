
<!-- Declaração das Variaveis -->
<?php 

    $servidor = "69.49.241.104";
    $usuario = "prepress_grupoboleiro";
    $senha = "@Boleiros#2024";
    $banco = "prepress_boleiros";

?>

<!-- Conexão -->
<?php 

    try{
        $pdo = new PDO("mysql:host=$servidor; dbname=$banco", "$usuario", "$senha"); 
    } catch(PDOException $e) {
        die($e -> getMessage());
    }
    

?>