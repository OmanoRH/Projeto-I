<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boleiros Receitas</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css">
</head>
<body>
    <!-- Barra de Navegação -->
    <?php
    require("barra-de-navegacao.php");
    require("conexao.php");

    // Function to decode base64 image and cache it
    function decode_and_cache_image($image_data) {
        static $image_cache = []; // Static variable to cache decoded images
        if (!isset($image_cache[$image_data['id_bolo']])) {
            $decoded_image = base64_decode($image_data['img_bolo'], true);
            if ($decoded_image !== false) {
                $image_cache[$image_data['id_bolo']] = $decoded_image;
            } else {
                $image_cache[$image_data['id_bolo']] = null; // Handle decode failure
            }
        }
        return $image_cache[$image_data['id_bolo']];
    }

    // Get the offset from the URL, default to 0 if not set
    $offset = isset($_GET['offset']) ? intval($_GET['offset']) : 0;

    // Fetch recipes with the given offset
    $sql = $pdo->prepare("SELECT id_bolo, img_bolo, nome_bolo FROM bolo LIMIT 6 OFFSET ?");
    $sql->bindParam(1, $offset, PDO::PARAM_INT);
    $sql->execute();
    $dadosB = $sql->fetchAll();
    ?>

    <div class="container">
        <div class="row" id="recipe-container">
            <?php
            if (!empty($dadosB)) {
                foreach ($dadosB as $value) {
                    $imgData = decode_and_cache_image($value); // Decode image using cached function result

                    echo '
                        <div class="cartaz col-4">
                            <div class="card mt-3">
                                <img class="img-bolodecenoura" src="data:image/jpeg;base64,' . base64_encode($imgData) . '" alt="' . $value['nome_bolo'] . '">
                                <div class="card-body">
                                    <h5 class="card-title">' . $value['nome_bolo'] . '</h5>
                                    <a href="paginaReceita.php?id=' . $value['id_bolo'] . '" class="btn btn-primary">Ver Receita</a>
                                </div>
                            </div>
                        </div>';
                }
            } else {
                echo '<p>Nenhum resultado encontrado.</p>';
            }
            ?>
        </div>
        <div class="d-flex justify-content-between">
            <!-- Voltar Button -->
            <a href="?offset=<?php echo max(0, $offset - 6); ?>" class="btn mt-5 mb-3 btn-primary <?php echo $offset <= 0 ? 'disabled' : ''; ?>">Voltar</a>

            <!-- Próxima Página Button -->
            <a href="?offset=<?php echo $offset + 6; ?>" class="btn mt-5 mb-3 btn-primary">Próxima página</a>
        </div>
    </div>

    <!-- Linkagem do JS -->
    <script src="JS/bootstrap.bundle.min.js"></script>
    <script src="JS/script.js"></script>
</body>
<footer class="footer mt-auto py-3">
    <?php require("rodape.php"); ?>
</footer>
</html>
