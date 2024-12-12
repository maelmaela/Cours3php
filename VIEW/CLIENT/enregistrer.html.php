<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../../PUBLIC/style.css">
    <link rel="stylesheet" href="Connexion.html">
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
                <button> <a href="">Enregister Dette</a></button>
                <button> <a href="../DETTES/listedette.html.php">Lister Dette</a></button>
                <button> <a href="../DETTES/notification.html.php">Notification</a></button>
                <button> <a href="../DETTES/cumul.html.php">Cumul</a></button>
                <button> <a href="../PRODUIT/Enregistrerproduit.html.php">Enregister Produit</a></button>
                <button> <a href="./Connexion.html">Deconnexion</a></button>
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
                        <h2>Infos du Client</h2>
                        <div class="label">
                            <div class="lab1">
                                <label for="" >Nom </label>
                                <input type="text">
                            </div>
                            <div class="lab2">
                                <label for="">Prénom</label>
                                <input type="text">
                            </div>
                            <div class="lab3">
                                <label for="">Total due</label>
                                <input type="number">
                            </div>
                        </div>
                    </div>
                    <div class="ligne2">
                        <h2>Dettes Non payés</h2>
                        <table>
                            <tr>
                                <th>Date</th>
                                <th>Montant</th>
                                <th>Montant Versé</th>
                            </tr>
                            <tr>
                                <td>30/09</td>
                                <td>100.000</td>
                                <td>20.000</td>
                            </tr>
                            <tr>
                                <td>01/10</td>
                                <td>500.000</td>
                                <td>300.000</td>
                            </tr>
                            <tr>
                                <td>03/10</td>
                                <td>50.000</td>
                                <td>10.000</td>
                            </tr>
                            <tr>
                                <td>03/10</td>
                                <td>50.000</td>
                                <td>10.000</td>
                            </tr>
                        </table>
                        <button> <a href="../CLIENT/clientnon.html.php">Nouveau client</a></button>
                    </div>
                    
                </div>
                <div class="colonne2">
                    <div class="ligne1">
                        <h2>Nouvelle Dette</h2>
                        <div class="label">
                            <div class="lab1">
                                <label for="" >Nom </label>
                                <input type="text">
                            </div>
                            <div class="lab2">
                                <label for="">Prénom</label>
                                <input type="text">
                            </div>
                            <div class="lab3">
                                <label for="">Total due</label>
                                <input type="number">
                                <button> <a href="../DETTES/listedette.html.php">Ajouter</a></button>
                            </div>
                        </div>
                    </div>
                    <div class="ligne2">
                        <h2>Dettes Non payés</h2>
                        <table>
                            <tr>
                                <th>Produit</th>
                                <th>PU</th>
                                <th>Quantité</th>
                                <th>PT</th>
                            </tr>
                            <tr>
                                <td>Café</td>
                                <td>50</td>
                                <td>200</td>
                                <td>10.000</td>
                            </tr>
                            <tr>
                                <td>01/10</td>
                                <td>500.000</td>
                                <td>300.000</td>
                                <td>20.000</td>
                            </tr>
                            <tr>
                                <td>Savon</td>
                                <td>200</td>
                                <td>1000</td>
                                <td>200.000</td>
                            </tr>
                            <tr>
                                <td>Riz</td>
                                <td>25.000</td>
                                <td>20</td>
                                <td>500.000</td>
                            </tr>
                        </table>
                        <button> <a href="../PRODUIT/Enregistrerproduit.html.php">Enregister</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>