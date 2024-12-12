<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Connexion.html">
    <link rel="stylesheet" href="../../PUBLIC/style.css">
    <title>Paiement dette</title>
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
                <button> <a href="./listedette.html.php">Lister Dette</a></button>
                <button> <a href="./notification.html.php">Notification</a></button>
                <button> <a href="./cumul.html.php">Cumul</a></button>
                <button> <a href="../PRODUIT/Enregistrerproduit.html.php">Enregister Produit</a></button>
                <button> <a href="../CLIENT/Connexion.html.php">Deconnexion</a></button>
            </div>
        </div>
        <div class="content">
            <div class="navb-barp">
                <div class="leftp">
                    <div class="lab2">
                        <label for="">Date</label>
                        <input type="date">
                    </div>
                    <div class="lab3">
                        <label for="">Montant</label>
                        <input type="number">
                    </div>
                </div>
                <div class="rightp">
                    <div class="lab2">
                        <label for="">Montant versé</label>
                        <input type="number">
                    </div>
                    <div class="lab3">
                        <label for="">Montant restant</label>
                        <input type="number">
                    </div>
                </div>
                
            </div>
            <div class="contenup">
                <div class="colonne1p">
                    <div class="ligne2p">
                        <h2>Paiement</h2>
                        <table>
                            <tr>
                                <th>Date</th>
                                <th>Montant</th>
                            </tr>
                            <tr>
                                <td>30/09</td>
                                <td>100.000</td>
                            </tr>
                            <tr>
                                <td>01/10</td>
                                <td>500.000</td>
                            </tr>
                        </table>
                    </div>
                    
                </div>
                <div class="colonne2p">
                    <div class="ligne1">
                        <h2>Enregistrement</h2>
                        <div class="label">
                            <div class="lab1">
                                <label for="" >Montant </label>
                                <input type="number">
                            </div>
                        </div>
                    </div>
                    <div class="ligne2">
                        <button> <a href="../CLIENT/enregistrer.html.php">Annuler</a></button>
                        <button> <a href="../CLIENT/enregistrer.html.php">OK</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>