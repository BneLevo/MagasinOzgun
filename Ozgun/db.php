<?php
    include("database.php");

    $sql = "INSERT INTO Chaussure (nom, prix, photo)
    VALUES
    (""Nike Air Max Dn8", 220, "https://static.nike.com/a/images/t_PDP_936_v1/f_auto,q_auto:eco/3966977d-1d2e-4d9d-844d-e5b3f1bee59b/AIR+MAX+DN8+AMD.png"");"

    mysqli_query($conn, $sql);

    mysqli_close($conn);