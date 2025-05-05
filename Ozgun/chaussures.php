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
    if ($nomChaussure == $leNomChaussure) 
    {
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

            </section>
        </div>

        <section id="infoChaussures">
            <div><?= $nomChaussure ?></div>
            <div>a</div>
            <?php $prixChaussure = $data['prix'] ?>
            <div id="prixChaussures"><?=$prixChaussure?> CHF</div>
            <div>a</div>
            <div>a</div>
            <div>a</div>
            <div>a</div>
            <div>a</div>
        </section>
    </main>
</body>

<?php
    }
}
    
?>


</html>