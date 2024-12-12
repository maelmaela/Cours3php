<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    if ($page == 1) {
        include_once "../VIEW/CLIENT/Connexion.html.php";
    } elseif ($page == 2) {
        include_once "../VIEW/CLIENT/enregistrer.html.php";
    } elseif ($page == 3) {
        include_once "../VIEW/DETTES/listedette.html.php";
    } elseif ($page == 4) {
        include_once "../VIEW/DETTES/notification.html.php";
    } elseif ($page == 5) {
        include_once "../VIEW/DETTES/cumul.html.php";
    } elseif ($page == 6) {
        include_once "../VIEW/PRODUIT/Enregisterproduit.html.php";
    } elseif ($page == 7) {
        include_once "../VIEW/CLIENT/Connexion.html.php";
    }
    ?>
</body>

</html>