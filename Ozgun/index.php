<?php

if (file_exists("chaussures.json")) {

    $json_data = file_get_contents("chaussures.json");

    $datas = json_decode($json_data, true);
}


?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>oZGUN</title>
</head>

<body>

    <?php include("./header.php") ?>


    <main>
        <article id="grandImage">
            <img src="img/ExempleBigPhoto.jpg" alt="">
        </article>
        <section>

            <div id="produitsDiv">
                <article id="produits">
                    <?php

                    ?>
                    <?php
                    $c = 0;

                    // Mélanger les datas
                    shuffle($datas);
                    foreach ($datas as $data) {

                        $idChaussure = $data["id"];
                        $nomChaussure = $data["Chaussures"];
                        $imageChaussure = $data["image"];
                        $prixChaussure = $data["prix"];
                        $tailleChaussure = $data["taille"];

                        ?>
                        <div>


                            <a href='chaussures.php?id=<?= $idChaussure ?>'><img src="<?php echo $data["image"] ?>"
                                    alt=""></a>
                            <p><?= $nomChaussure ?></p>
                            <p><?= $prixChaussure ?> .-</p>
                            <button>Add To Bag</button>
                        </div>
                        <?php
                        $c++;

                        // il va afficher que 6 produits
                        if ($c >= 6) {
                            break;
                        }
                    }
                    ?>


                </article>
            </div>

            <article>
                <img src="img/exempleNike.png" alt="">
                <img src="img/exempleNike.png" alt="">
                <!-- ici il y aura des marques -->
            </article>
        </section>
    </main>

    <?php include("footer.php") ?>

</body>

<script src="script.js"></script>

</html>