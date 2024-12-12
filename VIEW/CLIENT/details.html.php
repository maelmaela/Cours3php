<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../../PUBLIC/style.css">
    <link rel="stylesheet" href="Connexion.html">
    <link rel="stylesheet" href="../PUBLIC/style.css">
    <title>Details</title>
</head>

<body>
    <div class="container">
        <div class="aside">
            <div class="header">
                <h1><i class="ri-home-5-line"></i></h1>
                <h3>GESTION <br> BOUTIQUE</h3>
            </div>
            <div class="menu">
                <button> <a href="./enregistrer.html">Enregister Dette</a></button>
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
                <div class="bloc">
                    <div class="top">
                        <div class="gauche">
                            <div class="label">
                                <div class="lab1d">
                                    <label for="">Nom </label>
                                    <p>KOUTOGLO</p>
                                </div>
                                <div class="lab2d">
                                    <label for="">Prénom</label>
                                    <p>Maël maela</p>
                                </div>
                                <div class="lab3d">
                                    <label for="">Téléphone</label>
                                    <p>78 451 24 37</p>
                                </div>
                                <div class="lab3d">
                                    <label for="">Email</label>
                                    <p>maelmaela01@gmail.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="droite">
                            <div class="label">
                                <div class="lab1d">
                                    <label for="">Montant </label>
                                    <p>5.000</p>
                                </div>
                                <div class="lab2d">
                                    <label for="">MontantV</label>
                                    <p>3.000</p>
                                </div>
                                <div class="lab3d">
                                    <label for="">MontantR</label>
                                    <p>2.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bottom">
                        <h2>Liste des dettes</h2>
                        <table>
                            <tr>
                                <th>Nom et prénom</th>
                                <th>Téléphone</th>
                                <th>Adresse</th>
                                <th>Montant due</th>
                                <th>Actions</th>
                            </tr>
                            <tr>
                                <td>KOUTOGLO Mael</td>
                                <td>78 451 24 37</td>
                                <td>FASS</td>
                                <td>5.000</td>
                                <td><button> <a href="./details.html">Détails</a></button></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>