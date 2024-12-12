<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../../PUBLIC/style.css">
    <title>Connexion</title>
</head>
<body>
    <div class="bodyconnect">
      <div class="login-container">
        <h2>FORMULAIRE DE CONNEXION</h2>
        <form action="/login" method="POST">
          
            <label for="username">Email</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            <div class="btnconnexion">
              <button type="submit">Annuler</button>
              <button type="button" onclick="window.location.href='enregistrer.html';">Connexion</button>
            </div> 
        </form>
    </div>
    
</body>
</html>