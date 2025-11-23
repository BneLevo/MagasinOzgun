<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/MagasinOzgun/Ozgun/public/css/style.css">
</head>
<body>
<main>
    <form action="" method="GET">

        <input type="hidden" name="action" value="search">

        <label for="searchBar">Name :</label>
        <input type="text" name="searchBar">

        <label for="year">Year :</label>
        <input type="number" name="year">
        <button type="submit" name="search">Search</button>
    </form>
    <section>

        <div id="produitsDiv">
            <article id="produits">
    <?php
    // if no shoes were found
    if(!empty($shoes)):
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
    endforeach;
    else: ?>
        <div>
                <h3>No shoes were found that match your search criteria.</h3>
                <p>Please try a different keyword or reset your filters.</p>
            </div>
    <?php endif?>
                </article>
            </div>
        </section>
</main>
</body>
</html>