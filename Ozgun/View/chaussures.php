<!DOCTYPE html>

<?php

$idChaussure = $_GET['id'];
?>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $shoes['name'] ?></title>
    <link rel="stylesheet" href="/MagasinOzgun/Ozgun/public/css/style.css">
</head>

        <body id="pageChaussures">
        <?php include VIEW_PATH . "/includes/header.php" ?>
            <main>
                <div id="imgChaussuresEtCommentaires">
                    <section id="imgEtChaussure">
                        <div id="couleurChaussure">a</div>
                        <div id="imageChaussure">
                            <img src="<?= $shoes['img'] ?>" alt="">
                        </div>
                    </section>

                    <section id="Commentaires">
                        <h2>Comments :</h2>
                        <div>
                            <!-- For comments -->
                        </div>
                    </section>
                </div>
                <section id="infoChaussures">

                    <div id="nomChaussures"><?= $shoes['name'] ?></div>
                    <div id="marqueChaussures"><?= $shoes['brand'] ?></div>
                    <div id="prixChaussures"><?= $shoes['price'] ?> CHF</div>

                    <!-- Color of shoes -->
                    <div>a</div>

                    <div id="tailleChaussures">
                        <?php
                        foreach ($shoes["size"] as $taille) {

                            ?>
                            <button id="boxTailleChaussures">
                                <?= $taille, "\n" ?>
                            </button>
                            <?php
                        }
                        ?>
                    </div>
                    <button id="buttonAddToBag">Add To Bag</button>
                    <button id="buttonAddToFavourite">Favourite &#10084;</button>
                </section>
            </main>
        <?php include VIEW_PATH . "/includes/footer.php" ?>
        </body>
</html>