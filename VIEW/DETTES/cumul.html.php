<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../../PUBLIC/style.css">
    <title>Cumul</title>
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
                <button> <a href="./listedette.html">Lister Dette</a></button>
                <button> <a href="./notification.html">Notification</a></button>
                <button> <a href="">Cumul</a></button>
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
                        <h2>Liste des clients avec le cumul de montant</h2>
                        <div class="menuderoulant">
                            <label for="selection">Filtrer par :</label>
                            <select id="selection" name="options">
                                <option value="option1">Nom</option>
                                <option value="option2">Telepone</option>
                                <option value="option2">Adresse</option>
                            </select>
                        </div>

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
                            <tr>
                                <td></td>
                                <td>78 153 41 47</td>
                                <td>Medina</td>
                                <td>100.000</td>

                                <td><button> <a href="./details.html">Détails</a></button></td>
                            </tr>
                            <tr>
                                <td>NDIAYE Fatou</td>
                                <td>77 550 20 10</td>
                                <td>Rufisque</td>
                                <td>200.000</td>
                                <td><button> <a href="./details.html">Détails</a></button></td>
                            </tr>
                            <tr>
                                <td>NDIAYE Fatou</td>
                                <td>77 550 20 10</td>
                                <td>Rufisque</td>
                                <td>200.000</td>
                                <td><button> <a href="./details.html">Détails</a></button></td>
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