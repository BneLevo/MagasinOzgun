<?php

if (file_exists("chaussures.json")) {

    $json_data = file_get_contents("chaussures.json");

    $products = json_decode($json_data, true);
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
            <!-- ici il y aura une grand image -->
        </article>
        <section>

            <div id="produitsDiv">
                <article id="produits">

                <!-- ici il y aura des produits -->
                    <?php foreach ($products as $product) { ?>
                            <div>
                                
                                <a href="chaussures.php"><img src="<?php echo $product["image"] ?>" alt=""></a>
                                <p><?= $product["Chaussures"] ?></p>
                            </div>
                        <?php
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
    <footer>
        <ul>
            <li>Magasin</li>
            <li>Qui suis-je</li>
            <li>Contact</li>
        </ul>
        <div>
            <p>
                oZGUN &copy; Copyright 2025
                <br>
                Made By Ozgun Levent
            </p>
        </div>
        <!-- ici il y aura d'info de mon magasin et copyright etc. -->
    </footer>


</body>

<script src="script.js"></script>

</html>