<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../../PUBLIC/style.css">
    <title>Lister dette</title>
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
                <button> <a href="">Lister Dette</a></button>
                <button> <a href="../DETTES/notification.html.php">Notification</a></button>
                <button> <a href="../DETTES/cumul.html.php">Cumul</a></button>
                <button> <a href="../PRODUIT/Enregistrerproduit.html.php">Enregister Produit</a></button>
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
                <div class="colonne">
                    <div class="ligne2">
                        <h2>Dettes Non payés</h2>
                        <table>
                            <tr>
                                <th>Nom et prénom</th>
                                <th>Date</th>
                                <th>Montant</th>
                                <th>Montant restant</th>
                                <th>Actions</th>
                            </tr>
                            <tr>
                                <td>KOUTOGLO Mael</td>
                                <td>30/09/24</td>
                                <td>12.000</td>
                                <td>5.000</td>
                                <td><button> <a href="./paiement.html.php">Paiement</a></button>
                                    <button> <a href="./annulation.html.php">Anulation</a></button>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>01/10/24</td>
                                <td>1.000.000</td>
                                <td>100.000</td>
                                <td><button> <a href="./paiement.html.php">Paiement</a></button>
                                    <button> <a href="./annulation.html.php">Anulation</a></button>
                                </td>
                            </tr>
                            <tr>
                                <td>NDIAYE Fatou</td>
                                <td>5/10/24</td>
                                <td>500.000</td>
                                <td>200.000</td>
                                <td><button> <a href="./paiement.html.php">Paiement</a></button>
                                    <button> <a href="./annulation.html.php">Anulation</a></button>
                                </td>
                            </tr>
                            <tr>
                                <td>NDIAYE Fatou</td>
                                <td>05/10/24</td>
                                <td>500.000</td>
                                <td>200.000</td>
                                <td><button> <a href="./paiement.html.php">Paiement</a></button>
                                    <button> <a href="./annulation.html.php">Anulation</a></button>
                                </td>
                            </tr>
                        </table>
                </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>