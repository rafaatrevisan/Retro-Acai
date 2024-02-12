<?php
    require_once 'src/conexao-bd.php';
    require_once 'src/Modelo/Produto.php';
    require_once 'src/Respositorio/ProdutoRepositorio.php';

    $produtosRepositorio = new ProdutoRepositorio($pdo);
    $dadosAcai = $produtosRepositorio->opcoesAcai();
    $dadosSorvete = $produtosRepositorio->opcoesSorvete();
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="img/icone-retro.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Retrô Açaí - Cardápio</title>
</head>
<body>
    <main>
        <section class="container-banner">
            <div class="container-texto-banner">
                <img src="img/logo-retro.png" class="logo" alt="logo-retro">
            </div>
        </section>
        <h2>Cardápio Digital</h2>
        <section class="container-cafe-manha">
            <div class="container-cafe-manha-titulo">
                <h3>Opções de Açaí</h3>
                <img class= "ornaments" src="img/ornaments-acai.png" alt="ornaments">
            </div>
            <div class="container-cafe-manha-produtos">
                <?php foreach ($dadosAcai as $acai):?>
                <div class="container-produto">
                    <div class="container-foto">
                        <img src="<?= $acai->getImagemSrc() ?>">
                    </div>
                    <p><?= $acai->getNome() ?></p>
                    <p><?= $acai->getDescricao() ?></p>
                    <p><?= $acai->getPrecoFormatado() ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
        <section class="container-almoco">
            <div class="container-almoco-titulo">
                <h3>Opções de Sorvete</h3>
                <img class= "ornaments" src="img/ornaments-acai.png" alt="ornaments">
            </div>
            <div class="container-almoco-produtos">
                <?php foreach ($dadosSorvete as $sorvete): ?>
                <div class="container-produto">
                    <div class="container-foto">
                        <img src="<?= $sorvete->getImagemSrc() ?>">
                    </div>
                    <p><?= $sorvete->getNome() ?></p>
                    <p><?= $sorvete->getDescricao() ?></p>
                    <p><?= $sorvete->getPrecoFormatado() ?></p>
                </div>
            <?php endforeach; ?>
            </div>
        </section>
    </main>
</body>
</html>