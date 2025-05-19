<?php

// lire les fichiers json
$json_chaussures = file_get_contents("./db/chaussures.json");
$datas_chaussures = json_decode($json_chaussures, true);

$json_marque = file_get_contents("./db/marque.json");
$datas_marque = json_decode($json_marque, true);
?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Ozgun</title>
</head>

<body>

    <?php include("./header.php") ?>


    <main>
        <article id="grandImage">
            <p id="grandImageNom">Nike Air Max</p>
            <img src="img/BigPhoto.png" alt="">
            <button>Buy Now</button>
        </article>

        <section>

            <div id="produitsDiv">
                <article id="produits">
                    <?php

                    ?>
                    <?php
                    $c = 0;

                    // Mélanger les datas
                    // shuffle($datas);
                    foreach ($datas_chaussures as $data_chaussures) {

                        $idChaussure = $data_chaussures["id"];
                        $nomChaussure = $data_chaussures["Chaussures"];
                        $imageChaussure = $data_chaussures["image"];
                        $prixChaussure = $data_chaussures["prix"];
                        $tailleChaussure = $data_chaussures["taille"];

                        // foreach ($data["couleur"] as $couleur => $images) {}
                    
                        ?>
                        <div>
                            <a href='chaussures.php?id=<?= $idChaussure ?>'><img src="<?php echo $data_chaussures["image"] ?>" alt=""></a>
                            <p><?= $nomChaussure ?></p>
                            <p><?= $prixChaussure ?> .-</p>
                            <button>Add To Bag</button>
                        </div>
                        <?php
                        $c++;

                        // il va afficher que 6 produits
                        if ($c >= 9) {
                            break;
                        }
                    }
                    ?>


                </article>
            </div>
            <article>
                <?php
                foreach ($datas_marque as $data_marque) {

                    $marqueChaussures = $data_marque["id"];
                    $logoChaussures = $data_marque["logo"];

                    ?>

                    <!-- ça n'affiche pas!!! -->
                    <a href='marque.php?id=<?= $marqueChaussures ?>'><img src="<?php echo $data_marque["logo"] ?>" alt=""></a>
                
                <?php
                }
                ?>

                
                

                <?php ?>
            </article>
        </section>
    </main>

    <?php include("footer.php") ?>

</body>

<script src="script.js"></script>

</html>