<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/MagasinOzgun/Ozgun/public/css/style.css">
    <title>Ozgun</title>
</head>

<body>
<?php include VIEW_PATH . "/includes/header.php" ?>
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
                    $c = 0;
                    foreach ($shoes as $shoe):
                        ?>
                        <div>
                            <a href='index.php?action=chaussures&id=<?= $shoe['id_Shoe'] ?>'><img
                                    src="<?php echo $shoe['img'] ?>" alt=""></a>
                            <p><?= $shoe['name'] ?></p>
                            <p><?= $shoe['price'] ?> .-</p>
                            <button>Add To Bag</button>
                        </div>
                        <?php
                        $c++;
                        // il va afficher que 6 produits
                        if ($c >= 9) {
                            break;
                        }
                    endforeach ?>
                </article>
            </div>
        </section>
    </main>

<?php include VIEW_PATH . "/includes/footer.php" ?>
</body>

</html>