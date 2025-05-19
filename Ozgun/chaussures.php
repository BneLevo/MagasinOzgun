<!DOCTYPE html>

<?php
$json = file_get_contents("./db/chaussures.json");
$datas = json_decode($json, true);

$idChaussure = $_GET['id'];
?>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ozgun</title>
    <link rel="stylesheet" href="./css/style.css">
</head>


<?php
for ($data = 0; $data < 8; $data++) {
    # code...
}
foreach ($datas as $data) {
    $lIdChaussures = $data['id'];
    if ($idChaussure == $lIdChaussures) {
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

                    <?php $nomChaussure = $data['Chaussures'] ?>
                    <div id="nomChaussures"><?= $nomChaussure ?></div>
                    <!-- Brend of shoes -->
                    <div id="marqueChaussures">info chaussures</div>

                    <!-- Prize of shoes -->
                    <?php $prixChaussure = $data['prix'] ?>
                    <div id="prixChaussures"><?= $prixChaussure ?> CHF</div>

                    <!-- Color of shoes -->
                    <div>a</div>

                    <!-- Size of shoes -->
                    <?php
                    $tailleChaussure = $data["taille"]
                        ?>

                    <div id="tailleChaussures">
                        <?php
                        foreach ($tailleChaussure as $taille) {

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

            <?php include("footer.php") ?>
        </body>

        <?php
    }
}

?>


</html>