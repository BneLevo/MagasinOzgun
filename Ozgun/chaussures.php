<!DOCTYPE html>

<?php
$json = file_get_contents("chaussures.json");
$datas = json_decode($json, true);

$nomChaussure = $_GET['chaussures'];
?>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>


<?php

foreach ($datas as $data) {
    $leNomChaussure = $data['Chaussures'];
    if ($nomChaussure == $leNomChaussure) {
        ?>

        <body id="pageChaussures">
            <?php include("./header.php") ?>

            <main>
                <div id="imgChaussuresEtCommentaires">
                    <section id="imgEtChaussure">
                        <div id="couleurChaussure">a</div>
                        <div id="imageChaussure">
                            <?php $imageChaussure = $data['image'] ?>
                            <img src="<?= $imageChaussure ?>" alt="">
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
                    <div id="nomChaussures"><?= $nomChaussure ?></div>
                    <div id="marqueChaussures">info chaussures</div>
                    <?php $prixChaussure = $data['prix'] ?>
                    <div id="prixChaussures"><?= $prixChaussure ?> CHF</div>
                    <div>a</div>
                    <div>a</div>
                    <button id="buttonAddToBag">Add To Bag</button>
                    <button>Favourite &#10084;</button>
                </section>
            </main>
        </body>

        <?php
    }
}

?>


</html>