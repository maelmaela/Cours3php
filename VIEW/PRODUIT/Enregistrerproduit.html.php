<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../../PUBLIC/style.css">
    <title>Enregistrer dette</title>
</head>
<body>
    <div class="container">
        <div class="aside">
            <div class="header">
                <h1><i class="ri-home-5-line"></i></h1>
                <h3>GESTION <br> BOUTIQUE</h3>
            </div>
            <div class="menu">
                <button> <a href="../CLIENT/enregistrer.html.php">Enregister Dette</a></button>
                <button> <a href="../DETTES/listedette.html.php">Lister Dette</a></button>
                <button> <a href="../DETTES/notification.html.php">Notification</a></button>
                <button> <a href="../DETTES/cumul.html.php">Cumul</a></button>
                <button> <a href="">Enregister Produit</a></button>
                <button> <a href="../CLIENT/Connexion.html.php">Deconnexion</a></button>
            </div>
        </div>
        <div class="content">
            <div class="navb-bar">
                <div class="search-container">
                <input type="text" placeholder="Rechercher un client..." class="search-bar">
                <button class="search-btn">Rechercher</button>
                </div>
            </div>
            <div class="contenu">
                <div class="colonne1">
                    <div class="ligne1">
                        <h2>Information Produit</h2>
                        <div class="label">
                            <div class="lab1p">
                                <label for="">Désignation</label>
                                <input type="text">
                            </div>
                            <div class="lab2p">
                                <label for="">Prix</label>
                                <input type="number">
                            </div>
                            <div class="lab3p">
                                <label for="">Unité</label>
                                <input type="number">
                            </div>
                            <div class="lab4p">
                                <label for="">Qte Stock</label>
                                <input type="number">
                            </div>
                        </div>
                    </div>
                    <div class="buttonp">
                        <button> <a href="../CLIENT/clientnon.html.php">Annuler</a></button>
                        <button> <a href="../CLIENT/clientnon.html.php">OK</a></button>
                    </div>
                </div>
                <div class="colonne2">
                    <div class="ligne2">
                        <h2>Liste des produits</h2>
                        <table>
                            <tr>
                                <th>Désignation</th>
                                <th>Prix</th>
                                <th>Vente</th>
                            </tr>
                            <tr>
                                <td>Café</td>
                                <td>200</td>
                                <td>10.000</td>
                            </tr>
                            <tr>
                                <td>Savon</td>
                                <td>1000</td>
                                <td>200.000</td>
                            </tr>
                            <tr>
                                <td>Savon</td>
                                <td>200</td>
                                <td>1000</td>
                            </tr>
                            <tr>
                                <td>Riz</td>
                                <td>20</td>
                                <td>25.000</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>