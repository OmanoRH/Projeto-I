<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boleiros Receitas</title>
    <!-- Linkagem do CSS -->
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

    // Fetch data from database
    $sql = $pdo->prepare("SELECT id_bolo, img_bolo, nome_bolo FROM bolo ORDER BY RAND() LIMIT 6");
    $sql->execute();
    $dadosBC = $sql->fetchAll();
    ?>

    <!-- introdução do site -->
    <div class="container">
        <div class="row">
            <h1 class="mt-3">Bem-vindo ao Boleiro Receitas!</h1>
            <h2>Sua próxima receita👇</h2>
        </div>
    </div>

    <!-- carrossel -->
    <div class="container">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <?php foreach (array_slice($dadosBC, 0, 3) as $index => $value): ?>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?= $index ?>" <?= $index === 0 ? 'class="active" aria-current="true"' : '' ?> aria-label="Slide <?= ($index + 1) ?>"></button>
                <?php endforeach; ?>
            </div>
            <div class="carousel-inner">
                <?php foreach (array_slice($dadosBC, 0, 3) as $index => $value): ?>
                    <div class="carousel-item <?= $index === 0 ? 'active' : '' ?> mt-3">
                        <a href="paginaReceita.php?id=<?= $value['id_bolo'] ?>">
                            <img style="height: 650px;" class="img-bolodecenoura d-block w-100" src="data:image/jpeg;base64,<?= base64_encode(decode_and_cache_image($value)) ?>" alt="<?= $value['nome_bolo'] ?>">
                            <div class="carousel-caption d-none d-md-block">
                                <h5><?= $value['nome_bolo'] ?></h5>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- fim do carrossel -->

    <!-- cards -->
    <div class="container">
        <div class="row">
            <h2 class="mt-3">Confira nossas outras receitas:</h2>
            <?php foreach (array_slice($dadosBC, -3) as $value): ?>
                <div class="cartaz col-4">
                    <div class="card mt-3">
                        <img class="img-bolodecenoura" src="data:image/jpeg;base64,<?= base64_encode(decode_and_cache_image($value)) ?>" alt="<?= $value['nome_bolo'] ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $value['nome_bolo'] ?></h5>
                            <a href="paginaReceita.php?id=<?= $value['id_bolo'] ?>" class="btn btn-primary"> Ver Receita Completa </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <a href="proximos_bolos.php" class="btn mt-5 mb-3 btn-primary">Ver Todos os Bolos</a>
        </div>
    </div>
    <!-- fim dos cards -->

    <!-- Rodapé do Site  -->
    <?php require("rodape.php"); ?>

    <!-- Linkagem do JS -->
    <script src="JS/bootstrap.bundle.min.js"></script>
    <script src="JS/script.js"></script>
</body>
</html>
